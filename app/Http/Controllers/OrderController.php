<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function addOrder(Request $request)
    {
        $data = $request->validate([
            'amazon_order_id' => 'required|string|unique:orders',
        ]);

        $order = Order::create($data);

        return response()->json(['message' => 'Order added successfully']);
    }

    public function updateOrder(Request $request)
    {
        $order = Order::findOrFail($request->order_id);

        $data = $request->validate([
            'amazon_order_id' => 'required|string|unique:orders,amazon_order_id,' . $order->id,
        ]);

        $order->update($data);

        return response()->json(['message' => 'Order updated successfully']);
    }

    public function deleteOrder(Request $request)
    {
        $order = Order::find($request->order_id);
        $order->delete();

        return response()->json(['message' => 'Order deleted successfully']);
    }
}
