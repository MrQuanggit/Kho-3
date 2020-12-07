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

    public function showCart(){
        $cart = session('cart');
        return view('admin.cart.cart',compact('cart'));
    }
}
