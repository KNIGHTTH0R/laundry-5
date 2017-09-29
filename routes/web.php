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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('home', 'HomeController@index')->name('home');
    Route::resource('orders', 'OrderController');
    Route::resource('users', 'UserController');
});

Route::any('error', function() {
    return view('error');
});

Route::get('resetpassword', 'ResetPasswordController@index');