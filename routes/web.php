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

Route::get('produk', [produkcontroller::class, 'index']);
Route::get('produk/create', [produkcontroller::class, 'create']);
Route::post('produk', [produkcontroller::class, 'store']);
Route::get('produk/{produk}', [produkcontroller::class, 'show']);
Route::get('produk/{produk}/edit', [produkcontroller::class, 'edit']);
Route::put('produk/{produk}', [produkcontroller::class, 'update']);
Route::delete('produk/{produk}', [produkcontroller::class, 'destroy']);

Route::get('user', [usercontroller::class, 'index']);
Route::get('user/create', [usercontroller::class, 'create']);
Route::post('user', [usercontroller::class, 'store']);
Route::get('user/{user}', [usercontroller::class, 'show']);
Route::get('produk/{produk}/edit', [produkcontroller::class, 'edit']);
Route::put('user/{user}', [usercontroller::class, 'update']);
Route::delete('user/{user}', [usercontroller::class, 'destroy']);

Route::get('loginadmin', [authcontroller::class, 'showLogin']);
Route::post('loginadmin', [authcontroller::class, 'processLogin']);