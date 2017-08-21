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
    return view('home');
});

Route::get('/orders', 'OrderController@get');

Route::post('/orders', 'OrderController@post');

Route::get('index', 'UserController@index');

Route::get('register', 'UserController@get');

Route::post('register', 'UserController@post');

Route::any('/error', function () {
    return view('error');
});