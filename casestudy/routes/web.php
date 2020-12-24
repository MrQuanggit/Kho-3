<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('auth.login');

Route::middleware(['auth', 'checkAccountActive'])->prefix('admin')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('dashboard', [ProductController::class, 'dashboard'])->name('admin.dashboard');
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('create', [UserController::class, 'create'])->name('users.create');
        Route::post('create', [UserController::class, 'store'])->name('users.store');
        Route::get('{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::post('{id}/edit', [UserController::class, 'update'])->name('users.update');
        Route::get('{id}/delete', [UserController::class, 'destroy'])->name('users.destroy');
    });
    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('create', [CategoryController::class, 'store'])->name('category.store');
        Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('{id}/edit', [CategoryController::class, 'update'])->name('category.update');
        Route::get('{id}/delete', [CategoryController::class, 'destroy'])->name('category.destroy');
    });
    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
        Route::get('create', [ProductController::class, 'create'])->name('product.create');
        Route::post('create', [ProductController::class, 'store'])->name('product.store');
        Route::get('{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
        Route::post('{id}/edit', [ProductController::class, 'update'])->name('product.update');
        Route::get('{id}/delete', [ProductController::class, 'destroy'])->name('product.destroy');
    });
    Route::prefix('customers')->group(function () {
        Route::get('/', [CustomerController::class, 'index'])->name('customers.index');
    });
    Route::prefix('orders')->group(function () {
        Route::get( '/', [OrderController::class, 'index'])->name('orders.index');
        Route::get( '{id}/detail', [OrderController::class, 'order_detail'])->name('orders.order_detail');
        Route::get('{id}/delete', [OrderController::class, 'destroy'])->name('order.delete');
        Route::get('{id}/confirm', [OrderController::class, 'confirm'])->name('order.confirm');
    });
});

Route::prefix('index')->group(function() {

    Route::get('{id}/product', [ProductController::class, 'product'])->name('index.product');

    Route::get('/', [ProductController::class, 'home'])->name('index.home');
    Route::get('men', [ProductController::class, 'men'])->name('index.men');
    Route::get('women', [ProductController::class, 'women'])->name('index.women');
    Route::get('jewelry', [ProductController::class, 'jewelry'])->name('index.jewelry');
    Route::get('story', [ProductController::class, 'story'])->name('index.story');

    Route::prefix('cart')->group(function (){
        Route::get('/{id}/add-to-cart', [CartController::class, 'addToCart'])->name('cart.addToCart');
        Route::get('/{id}/minus-to-cart', [CartController::class, 'minusToCart'])->name('cart.minusToCart');
        Route::get('cart', [CartController::class, 'showCart'])->name('cart.showCart');
        Route::get('delete', [CartController::class, 'deleteCart'])->name('cart.delete');
        Route::get('{id}', [CartController::class, 'deleteProduct'])->name('cart.deleteProduct');
        Route::post('checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    });
});
