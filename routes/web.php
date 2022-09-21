<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    session()->forget('user');
    return view('login');
});
Route::get('/dashboard',function () {
    return view('dashboard');
});
Route::get('/shop',function () {
    return view('shop');
});
Route::get('/profile',function () {
    return view('profile');
});
Route::get('/accountsettings',function () {
    return view('accountsettings');
});

Route::post("/login", [UserController::class,'login']);
Route::post("/register", [UserController::class,'register']);
Route::get("/", [ProductController::class,'index']);
Route::get("detail/{id}", [ProductController::class,'detail']);
Route::get("/search", [ProductController::class,'search']);
Route::post("/add_to_cart", [ProductController::class,'addToCart']);
Route::get("/cartList", [ProductController::class,'cartList']);
Route::get("/removecart/{id}", [ProductController::class,'removeCart']);
Route::get("/ordernow", [ProductController::class,'orderNow']);
Route::post("/checkout", [ProductController::class,'checkout']);
Route::get("/myorders", [ProductController::class,'myOrders']);


