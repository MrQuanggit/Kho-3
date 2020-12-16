<?php

use App\Http\Controllers\AuthController;
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
    Route::get('dashboard', function () {
        return view('admin.layout.dashboard');
    })->name('admin.dashboard');
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('create', [UserController::class, 'create'])->name('users.create');
        Route::post('create', [UserController::class, 'store'])->name('users.store');
        Route::get('{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::post('{id}/edit', [UserController::class, 'update'])->name('users.update');
        Route::get('{id}/delete', [UserController::class, 'destroy'])->name('users.destroy');
    });
    Route::prefix('categories')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
    })
});
