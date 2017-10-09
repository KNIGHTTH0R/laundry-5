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

Route::group(['middleware' => 'admin', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('home', 'HomeController@index')->name('home');
    Route::resource('orders', 'OrderController');
    Route::resource('users', 'UserController');
});

Route::get('myprofile', 'CustomerController@show')->middleware('customer');

Route::put('customer/{id}', 'CustomerController@update')->middleware('customer');

Route::get('book', 'BookingController@index')->middleware('customer');

Route::post('creatBooking', 'BookingController@store')->middleware('customer');

Route::put('customer/{id}', 'BookingController@update')->middleware('customer');

Route::any('error', function() {
    return view('error');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('basicmail','Mail\MailController@basic_email');

Route::get('attachemail','Mail\MailController@attachment_email');

