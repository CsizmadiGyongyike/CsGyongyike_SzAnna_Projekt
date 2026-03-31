<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::with('products')->get();
        $products = Product::all();

        // Ha az admin útvonalon vagyunk (ellenőrizzük a route nevét)
        if (request()->routeIs('admin.products.index')) {
            // Itt fontos, hogy ha a resources/views/admin.blade.php-t használod, akkor 'admin' legyen
            return view('products.admin', compact('products', 'categories'));
        }

        // Vásárlói oldal (resources/views/index.blade.php)
        return view('products.index', compact('categories', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();

        // Képkezelés: Mentés a public/images mappába
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['image'] = 'images/' . $filename;
        }

        Product::create($data);

        return redirect()->route('admin.products.index')->with('success', 'Termék sikeresen hozzáadva!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        // Ehhez kelleni fog egy resources/views/products/edit.blade.php
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            // Régi kép törlése, ha létezik
            if ($product->image && File::exists(public_path($product->image))) {
                File::delete(public_path($product->image));
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data['image'] = 'images/' . $filename;
        }

        $product->update($data);

        return redirect()->route('admin.products.index')->with('success', 'Termék sikeresen frissítve!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image && File::exists(public_path($product->image))) {
            File::delete(public_path($product->image));
        }

        $product->delete();

        return redirect()->back()->with('success', 'Termék törölve!');
}
}