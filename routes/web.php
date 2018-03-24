<?php

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
    return view('index');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/product_single', function () {
    return view('product_single');
});
