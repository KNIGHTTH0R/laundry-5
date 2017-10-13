<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'admin', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'HomeController@index');
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

Route::get('basicmail','Mail\MailController@basic_email');

Route::get('attachemail','Mail\MailController@attachment_email');

