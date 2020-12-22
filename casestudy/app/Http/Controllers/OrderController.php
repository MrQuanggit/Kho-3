<?php

namespace App\Http\Controllers;

use App\Http\Services\OrderService;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Support\Facades\DB;


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
        return view('admin.order.order', compact('orders', 'customers'));
    }

    public function order_detail() {
        $order_details = DB::table('order_detail')->get();
        return view('admin.order.order_detail', compact('order_details'));
    }
}


