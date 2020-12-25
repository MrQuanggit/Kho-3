<?php

namespace App\Http\Controllers;

use App\Http\Services\OrderService;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;


class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index() {
        $orders     = Order::all();
        $customers  = Customer::all();
        $products   = Product::all();
        return view('admin.order.order', compact('orders', 'customers','products'));
    }

    public function order_detail($id) {
        $orders     = Order::where('id',$id)->get();
        $customers  = Customer::all();
        $products   = Product::all();
        return view('admin.order.order_detail', compact('orders', 'customers','products'));
    }

    public function destroy($id) {
        if (!$this->userCan('admin')) {
            $message = 'Only Admin Can Deleted The Order!';
            return redirect()->route('orders.index')->with('success',$message);
        }
        $order = $this->orderService->findById($id);
        $order->delete();
        $message = 'Successfully Deleted The Order!';
        return redirect()->route('orders.index')->with('success',$message);
    }

    public function confirm($id) {
        $order = $this->orderService->findById($id);
        if($order->status == 1) {
            $order->status = 2;
            $order->save();
            foreach ($order->products as $item) {
                $product = Product::find($item->id);
                $product->stock -= $item->pivot->quantity;
                $product->save();
            }
            $message = 'Successfully Confirm This Order!';
            return redirect()->route('orders.index')->with('success',$message);
        } else {
            $message = 'This Order Has Been Confirm!';
            return redirect()->route('orders.index')->with('info',$message);
        }
    }
}


