<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function store(Request $request)
    {
        $id = $request->input('product_id');
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('showCart', true)->with('success', 'Termék hozzáadva!');
    }

    public function update(Request $request, string $id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id]) && $request->quantity > 0) {
            $cart[$id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('showCart', true);
    }

    public function destroy(string $id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('showCart', true);
    }
}
