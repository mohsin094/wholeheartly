<?php

namespace App\Http\Controllers;

use App\Imports\OrderImport;
use App\Imports\OrdersImport;
use App\Models\Order;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
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

    public function checkOrder(Request $request)
    {
        $order = Order::where('amazon_order_id',$request->amazon_order_id)->first();
        if($order){
            return 1;
        }
        return 0;
    }

    public function importOrders(Request $request) {
        try {
            Excel::import(new OrdersImport,$request->file);
            return redirect()->route('admin');
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error importing orders'], 500);
        }
    }
}
