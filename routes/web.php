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

    Route::resource('user_orders', 'OrderController');

    Route::get('pay', 'PaymentController@pay');
    Route::get('overview', 'PaymentController@overview');
});

Route::get('basicmail', 'Mail\MailController@basic_email');
Route::get('attachemail', 'Mail\MailController@attachment_email');

Route::get('error', function() {
    return view('error');
})->name('error');
