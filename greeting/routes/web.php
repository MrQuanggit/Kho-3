<?php

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
// Welcome tên
Route::get('/', function () {
    return view('welcome');
});
Route::get('/greeting/{name?}', function ($name = null) {

    if ($name) {

        echo 'Hello ' . $name . '!';

    } else {

        echo 'Hello World!';

    }

});

// bài login
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == '123456') {
        return view('welcome_admin');
    }

    return view('login_error');
});

// bài calculator
Route::get('/calculator', function () {
    return view('calculator');
});
Route::post('/calculator', function (Illuminate\Http\Request $request) {
    $productDescription = $request->productDescription;
    $price = $request->price;
    $discountPercent = $request->discountPercent;
    $discountAmount = $price * $discountPercent * 0.1;
    $discountPrice = $price - $discountAmount;

    return view('show_discount_amount', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));
});

// Bài từ điển
Route::get('/dictionary', function () {
    return view('dictionary');
});
Route::post('/dictionary', function (Illuminate\Http\Request $request) {
    $word = $request->word;
    $result = '';
    $dictionary = array("apple" => "Táo", "banana" => "Chuối", "lemon" => "Chanh", "car" => "ô tô");
    foreach ($dictionary as $key => $value) {
        if ($word == $key) {
            $result = $value;
        }
    }
    return view('display_dictionary', compact(['result', 'word']));
});

// Route co ban
Route::get('/', function () {
    echo "<h1>This is home page!</h1>";
});
Route::get('/about', function () {
    echo "<h1>This is about page!</h1>";
});
Route::get('/user/{name?}', function ($name = 'Jisoo') {
    echo "<h2>Welcome $name</h2>";
});

//Su dung route
Route::get('/h', [\App\Http\Controllers\HomeController::class, 'index']);

//Ứng dụng xem giờ các thành phố
Route::get('/', function () {
    return view('index');
});
Route::get('/{timezone?}', function ($timezone = null) {
    if (!empty($timezone)) {
        $time = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('UTC'));
        $time->setTimezone(new DateTimeZone(str_replace('-', '/', $timezone)));
        echo 'Múi giờ chọn ' . $timezone . ' hiện tại là: ' . $time->format('d-m-Y H:i:s');
    }
    return view('index');
});
