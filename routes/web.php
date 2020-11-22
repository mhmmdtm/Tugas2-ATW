<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\usercontroller;
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

Route::get('/beranda', function () {
    return view("beranda");
});

Route::get('/product', function () {
    return view("product");
});

Route::get('/cart', function () {
    return view("cart");
});

Route::get('/login', function () {
    return view("login");
});

Route::get('/register', function () {
    return view("register");
});

Route::get('homeadmin', [homecontroller::class, 'showHome']);

Route::post('produk/filter', [produkcontroller::class, 'filter']);
Route::resource('produk', produkcontroller::class);
Route::resource('user', usercontroller::class);

Route::get('loginadmin', [authcontroller::class, 'showLogin']);
Route::post('loginadmin', [authcontroller::class, 'processLogin']);
Route::get('logout', [authcontroller::class, 'logout']);