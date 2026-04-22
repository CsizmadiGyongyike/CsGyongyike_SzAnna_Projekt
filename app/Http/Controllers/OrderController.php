<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $orders = Order::with(['user', 'address'])->orderBy('created_at', 'desc')->get();
        return view('admin.orders.index', compact('orders'));
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
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $order->load(['orderItems.product', 'address']);
        return view('admin.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->update([
            'status' => $request->status
        ]);

        if ($order->address) {
            $order->address->update([
                'postcode' => $request->postcode,
                'city' => $request->city,
                'address' => $request->address
            ]);
        }

        if ($request->has('items')) {
            foreach ($request->items as $itemId => $newQuantity) {
                $item = OrderItem::find($itemId);
                if ($item) {
                    $product = $item->product;
                    $product->stock += $item->quantity;
                    $product->stock -= $newQuantity;
                    $product->save();

                    $item->update(['quantity' => $newQuantity]);
                }
            }
            $order->update(['amount' => $order->orderItems->sum(fn($i) => $i->unit_price * $i->quantity)]);
        }

        return redirect()->back()->with('success', 'Rendelés állapota frissítve!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        foreach ($order->orderItems as $item) {
            $product = $item->product;
            $product->stock += $item->quantity;
            $product->save();
        }

        $order->delete();
        return redirect()->route('order.index')->with('success', 'Rendelés törölve!');
    }

    public function removeItem(Order $order, $itemId)
    {
        $item = OrderItem::findOrFail($itemId);

        $product = $item->product;
        $product->stock += $item->quantity;
        $product->save();
        $order->amount -= ($item->unit_price * $item->quantity);
        $order->save();
        $item->delete();

        return redirect()->back()->with('success', 'Termék eltávolítva a rendelésből!');
    }
}
