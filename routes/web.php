<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('home', 'HomeController@index')->name('home');
Route::get('about', function () {
    return view('about');
});

Auth::routes();

Route::group(['middleware' => 'admin', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'HomeController@index');
    Route::resource('orders', 'OrderController');
    Route::resource('users', 'UserController');
    Route::get('search_orders', 'OrderController@search');
    Route::get('search_users', 'UserController@search');
});

Route::group(['middleware' => 'client', 'namespace' => 'Client'], function() {
    Route::get('profile', 'UserController@show');
    Route::get('profile/edit', 'UserController@edit');
    Route::put('profile/update', 'UserController@update');
    Route::resource('user_orders', 'OrderController');
    Route::get('pay/{id}', 'PaymentController@pay');
    Route::post('overview/{id}', 'PaymentController@overview');
    Route::get('history', 'OrderController@history');
});

Route::get('basicmail', 'Mail\MailController@basic_email');
Route::get('attachemail', 'Mail\MailController@attachment_email');

Route::get('error', function() {
    return view('error');
})->name('error');
