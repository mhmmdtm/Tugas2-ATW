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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view("index");
});

Route::get('/shop', function () {
    return view("shop");
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

Route::get('/base', function () {
    return view("template.base");
});

Route::get('/homeadmin', function () {
    return view("template.homeadmin");
});

Route::get('/produk', function () {
    return view("template.produk");
});

Route::get('/pengguna', function () {
    return view("template.pengguna");
});

Route::get('/loginadmin', function () {
    return view("template.loginadmin");
});