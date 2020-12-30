<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addToCart($id){
        $product = Product::findOrFail($id);
        $oldCart = session('cart');
        $cart    = new Cart($oldCart);
        $cart->add($product);
        session()->put('cart',$cart);
        $message = "Add Product Complete !";
        return back()->with('info',$message);
    }

    public function minusToCart($id){
        $product = Product::findOrFail($id);
        $oldCart = session('cart');
        $cart    = new Cart($oldCart);
        $cart->minus($product);
        session()->put('cart',$cart);
        $message = "Minus Product Complete !";
        return back()->with('info',$message);
    }

    public function showCart(){
        $cart = session('cart');
        return view('index.cart.cart',compact('cart'));
    }

    public function deleteCart() {
        session()->forget('cart');
        $message = "Delete Cart Complete !";
        return redirect()->route('cart.showCart')->with('info',$message);
    }

    public function deleteProduct($id) {
        $product = Product::findOrFail($id);
        $oldCart = session('cart');
        $cart    = new Cart($oldCart);
        $cart->remove($product);
        session()->put('cart',$cart);
        $message = "Delete Product Complete !";
        return back()->with('info',$message);
    }

    public function checkout(CartRequest $request){

        $customer                       = new Customer();
        $customer->customer_name        = $request->input('customer_name');
        $customer->customer_address     = $request->input('customer_address');
        $customer->customer_phone       = $request->input('customer_phone');
        $customer->customer_email       = $request->input('customer_email');
        $customer->save();

        $order = new Order();
        $order->customer_id     = $customer->id;
        $order->order_comment   = $request->input('order_comment');
        $order->status          = 1;
        $order->save();
        $orders_id = $order->id;

        $oldCart    = session('cart') ? session('cart'): null;
        $cart       = new Cart($oldCart);
        foreach($cart->items as $item) {
            $product_id = $item['product']->id;
            $quantity   = $item['totalQty'];
            $priceEach  = $item['product']->priceEach;
            DB::table('order_detail')->insert([
               'orders_id' => $orders_id,
                'product_id'=>$product_id,
                'quantity' => $quantity,
                'priceEach' => $priceEach
            ]);
        }
        session()->forget('cart');
        $message = "Order Success, Thank You!";
        return redirect()->route('cart.showCart')->with('success',$message);
    }

}
