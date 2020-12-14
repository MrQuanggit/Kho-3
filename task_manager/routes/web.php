<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerControllerResource;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use http\Client\Request;
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

//login
Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UserController;
Route::get('login', [\App\Http\Controllers\AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');

Route::middleware(['auth', 'checkActiveAccount'])->prefix('admin')->group(function () {
    Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');
    Route::get('dashboard', function () {
        return view('admin.dashboard');}
        )->name('admin.dashboard');
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('create', [UserController::class, 'create'])->name('users.create');
        Route::post('create', [UserController::class, 'store'])->name('users.store');
        Route::get('{id}/show', [UserController::class, 'show'])->name('users.show');
        Route::get('{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::post('{id}/edit', [UserController::class, 'update'])->name('users.update');
        Route::get('{id}/delete', [UserController::class, 'destroy'])->name('users.destroy');
        Route::get('search', [UserController::class, 'search'])->name('users.search');
    });
    Route::prefix('categories')->group(function (){
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/{id}/posts', [CategoryController::class, 'getPostByCategoryId'])->name('categories.getPostByCategoryId');
    });
    Route::prefix('posts')->group(function (){
        Route::get('/', [PostController::class, 'index'])->name('posts.index');
        Route::get('/search', [PostController::class, 'search']);
    });
    Route::prefix('cart')->group(function (){
        Route::get('/{id}/add-to-cart', [CartController::class, 'addToCart'])->name('cart.addToCart');
        Route::get('/{id}/minus-to-cart', [CartController::class, 'minusToCart'])->name('cart.minusToCart');
        Route::get('cart', [CartController::class, 'showCart'])->name('cart.showCart');
        Route::get('/', [ProductController::class, 'show'])->name('cart');
        Route::get('delete', [CartController::class, 'deleteCart'])->name('cart.delete');
        Route::get('{id}', [CartController::class, 'deleteProduct'])->name('cart.deleteProduct');
    });
});
