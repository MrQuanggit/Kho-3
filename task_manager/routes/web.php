<?php

use App\Http\Controllers\CustomerControllerResource;
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
//Mail-check
//Route::get('/', function () {
//    return view('index');
//});
//Route::post('checkMail', [\App\Http\Controllers\UserController::class, 'validationEmail'])->name('checkMail');

//Customer
////use App\Http\Controllers\CustomerController;
//Route::prefix('customers')->group(function () {
//    Route::get('/', [CustomerController::class, 'index'])->name('customers.index');
//    Route::get('create', [CustomerController::class, 'create'])->name('customers.create');
//    Route::post('create', [CustomerController::class, 'store'])->name('customers.store');
//    Route::get('{id}/show', [CustomerController::class, 'show'])->name('customers.show');
//    Route::get('{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
//    Route::post('{id}/edit', [CustomerController::class, 'update'])->name('customers.update');
//    Route::get('{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');
//});

//Route::group(['prefix' => 'customers'], function () {
//    Route::get('/',[CustomerController::class, 'index'])->name('customers.index');
//});

//Calculator
//Route::get('calculator', [\App\Http\Controllers\CalculatorController::class, 'index'])->name('calculator.index');

//Task 3
//Route::resource('customers', CustomerControllerResource::class);

//login
Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UserController;
Route::get('login', [\App\Http\Controllers\AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');

Route::middleware(['auth', 'checkActiveAccount'])->prefix('admin')->group(function () {
//    ::middleware(['auth', 'checkActiveAccount'])->
    Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
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
});
