<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => 'admin', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'HomeController@index');
    Route::resource('orders', 'OrderController');
    Route::resource('users', 'UserController');
});

Route::group(['middleware' => 'client', 'namespace' => 'Client'], function() {
    Route::get('profile', 'UserController@show');
    Route::put('profile/update', 'UserController@update');

    Route::get('book', 'BookingController@index');
    Route::get('orders', 'BookingController@show');
    Route::post('creatBooking', 'BookingController@store');
    Route::put('book/{id}', 'BookingController@update');
    
    Route::get('pay/{id}', 'PaymentController@pay');
    Route::get('overview', 'PaymentController@overview');
});

Route::get('basicmail', 'Mail\MailController@basic_email');
Route::get('attachemail', 'Mail\MailController@attachment_email');