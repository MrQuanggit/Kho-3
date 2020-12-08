<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    public function addToCart($idProduct){
        $product = Product::findOrFail($idProduct);
        $oldCart = session('cart');
        $cart = new Cart($oldCart);
        $cart->add($product);
        session()->put('cart',$cart);
        return back()->with('successAddToCart','Add successfully');
    }

    public function minusToCart($idProduct){
        $product = Product::findOrFail($idProduct);
        $oldCart = session('cart');
        $cart = new Cart($oldCart);
        $cart->minus($product);
        session()->put('cart',$cart);
        return back()->with('successAddToCart','Minus successfully');
    }

    public function showCart(){
        $cart = session('cart');
        return view('admin.cart.cart',compact('cart'));
    }

    public function deleteCart() {
        session()->forget('cart');
        $message = "Delete Cart Complete !";
        return redirect()->route('cart.showCart')->with('success',$message);
    }

    public function deleteProduct($idProduct) {
        $product = Product::findOrFail($idProduct);
        $oldCart = session('cart');
        $cart = new Cart($oldCart);
        $cart->remove($product);
        session()->put('cart',$cart);
        $message = "Delete Product Complete !";
        return back()->with('success',$message);
    }
}
