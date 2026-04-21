<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\Address;
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

        $currentInCart = isset($cart[$id]) ? $cart[$id]['quantity'] : 0;

        if (($currentInCart + 1) > $product->stock) {
            return redirect()->back()->with('error', 'Sajnos nincs több készleten! (Maximum: ' . $product->stock . ' db)');
        }

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
        return redirect()->back()->with('showCart', true)->with('success', 'Termék a kosárban!');
    }

    public function update(Request $request, string $id)
    {
        $cart = session()->get('cart');
        $product = Product::findOrFail($id);

        if (isset($cart[$id]) && $request->quantity > 0) {

            if ($request->quantity > $product->stock) {
                return redirect()->back()->with('error', 'A kért mennyiség meghaladja a készletet! (Elérhető: ' . $product->stock . ' db)');
            }

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

    public function checkout(Request $request){
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->back()->with('error', 'Üres a kosarad!');
        }

        try {
            DB::beginTransaction();

            foreach ($cart as $id => $details) {
                $product = Product::find($id);
                if (!$product || $product->stock < $details['quantity']) {
                    throw new \Exception("A(z) {$details['name']} időközben elfogyott vagy nincs belőle ennyi készleten!");
                }
            }

            $address = Address::create([
            'user_id'    => Auth::id(),
            'type'       => $request->type,
            'postcode'   => $request->postcode,
            'city'       => $request->city,
            'address'    => $request->address,
            'tax_number' => $request->tax_number,
            'alias'      => 'Rendelési cím ' . now()->format('Y-m-d H:i'),
        ]);

            $order = Order::create([
            'user_id'    => Auth::id(),
            'address_id' => $address->id,
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
            ]);
                $product = Product::find($id);
                $product->stock -= $details['quantity'];
                $product->save();
            }

            DB::commit();
            session()->forget('cart');
            return redirect()->route('product.index')->with('success', 'Rendelésedet sikeresen rögzítettük!');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Hiba történt a rendelés során: ' . $e->getMessage());
        }
    }
}
