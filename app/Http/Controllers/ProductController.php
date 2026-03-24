<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::all();
        //$categories = \App\Models\Category::all();
        if ($request->wantsJson()) {
            return response()->json($products);
        }

        $categories = Category::all();
        return view("products.index", compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //$validated = $request->validated();
        Product::create($request->validated());
        if ($request->wantsJson()) {
            return redirect()->route('product.index')->with('success', 'Termék hozzáadva!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        if ($request->wantsJson()) return response()->json($product);

        return redirect()->route('product.index')->with('success', 'Termék frissítve!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        if (request()->wantsJson()) return response()->json(['message' => 'Törölve']);

        return redirect()->route('product.index');
    }
}
