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

// View home page
Route::get('/', function () {
    return view('home');
});

// View all orders
Route::get('orders', 'OrderController@orders');
// Create new order
Route::post('orders', 'OrderController@createOrder');
// View all users
Route::get('users', 'UserController@users');
// View register form
Route::get('register', 'UserController@register');

// View error page
Route::any('error', function () {
    return view('error');
});

Route::get('test', 'DateTestController@test');