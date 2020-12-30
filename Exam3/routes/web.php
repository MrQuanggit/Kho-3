<?php

use App\Http\Controllers\StaffController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('staff')->group(function(){
    Route::get('/',[StaffController::class,'index'])->name('staff.index');
    Route::get('create',[StaffController::class,'create'])->name('staff.create');
    Route::post('create', [StaffController::class, 'store'])->name('staff.store');
    Route::get('{id}/edit', [StaffController::class, 'edit'])->name('staff.edit');
    Route::post('{id}/edit', [StaffController::class, 'update'])->name('staff.update');
    Route::get('{id}/delete', [StaffController::class, 'destroy'])->name('staff.destroy');
    Route::get('search', [StaffController::class, 'search'])->name('staff.search');
});
