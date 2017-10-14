<?php

Route::get('/', function () {
    return view('home');
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

Route::put('book/{id}', 'BookingController@update')->middleware('customer');

Route::get('orders', 'BookingController@show');

Route::any('error', function() {
    return view('error');
});

Route::get('pay/{id}', 'PaymentController@pay')->middleware('customer');

Route::get('overview', 'PaymentController@overview')->middleware('customer');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('basicmail','Mail\MailController@basic_email');

Route::get('attachemail','Mail\MailController@attachment_email');

