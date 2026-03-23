<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

    public function checkout(){
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->back()->with('error', 'Üres a kosarad!');
        }

        try {
            DB::beginTransaction();

            $order = Order::create([
            'user_id'    => Auth::id(),
            'order_time' => now(),
            'status'     => 'Feldolgozás alatt',
            'amount'     => array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)),
            ]);

            foreach ($cart as $id => $details) {
            OrderItem::create([
                'order_id'   => $order->id,
                'product_id' => $id,
                'quantity'   => $details['quantity'],
                'unit_price' => $details['price'],
            ]);}

            DB::commit();
            session()->forget('cart');
            return redirect()->route('product.index')->with('success', 'Rendelésedet sikeresen rögzítettük!');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Hiba történt a rendelés során: ' . $e->getMessage());
        }
    }
}
