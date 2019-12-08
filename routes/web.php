<?php

    
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

require 'admin.php';

/*
|--------------------------------------------------------------------------
| Guest Web Routes
|--------------------------------------------------------------------------
|
*/
// Auth::routes();
Route::post('login', 'Guest\LoginController@login')->name('login');
Route::get('logout', 'Guest\LoginController@logout')->name('user.logout');

Route::post('application', 'Guest\ApplicationController@create')->name('application.create');
Route::get('refreshcaptcha', 'Guest\ApplicationController@refreshCaptcha')->name('captcha.refresh');

/*
|--------------------------------------------------------------------------
| User Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'User\DashboardController@index')->name('welcome');

Route::group(['middleware' => ['auth']], function () {

    Route::prefix('profile')->group(function(){
        Route::get('/', 'User\ProfileController@create')->name('profile.create');
        Route::post('/', 'User\ProfileController@store')->name('profile.store');
        Route::get('update', 'User\ProfileController@edit')->name('profile.edit');
        Route::post('update-avatar', 'User\ProfileController@updateAvatar')->name('profile.update-avatar');
        Route::post('update-personal', 'User\ProfileController@updatePersonal')->name('profile.update-personal');
        Route::post('update-password', 'User\ProfileController@updatePassword')->name('profile.update-password');
    });

    Route::prefix('orders')->group(function(){
        Route::get('/', 'User\OrderController@index')->name('order.index');
        Route::get('create', 'User\OrderController@create')->name('order.create');
        Route::post('create', 'User\OrderController@store')->name('order.store');
    });

    Route::prefix('payments')->group(function(){
        Route::get('/', 'User\PaymentController@index')->name('payments.index');
        Route::post('submit-proof', 'User\PaymentController@update')->name('payments.update');
    });

    Route::prefix('payouts')->group(function(){
        Route::get('/', 'User\PayoutController@index')->name('payouts.index');
        Route::post('/', 'User\PayoutController@received')->name('payouts.received');
    });
});