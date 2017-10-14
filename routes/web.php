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

Route::middleware(['customer'])->group(function()
{
    Route::get('myprofile', 'CustomerController@show');

    Route::put('customer/{id}', 'CustomerController@update');

    Route::get('book', 'BookingController@index');

    Route::post('creatBooking', 'BookingController@store');

    Route::put('book/{id}', 'BookingController@update');

    Route::get('orders', 'BookingController@show');

    Route::get('pay/{id}', 'PaymentController@pay');

    Route::get('overview', 'PaymentController@overview');
});

Route::any('error', function() {
    return view('error');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('basicmail','Mail\MailController@basic_email');

Route::get('attachemail','Mail\MailController@attachment_email');

