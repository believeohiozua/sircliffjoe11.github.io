<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your Application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->group(function () {
    // Admin guest routes
    Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.submit');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    // Admin auth routes
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::prefix('settings')->group(function () {
            Route::get('/', 'Admin\SettingController@index')->name('admin.settings');
            Route::post('/', 'Admin\SettingController@update')->name('admin.settings.update');
        });

        Route::prefix('profile')->group(function () {
            Route::get('/', 'Admin\AdminController@show')->name('admin.admins.show');
        });

        Route::prefix('admins')->group(function () {
            Route::group(['middleware' => ['can:levelOne']], function () {
                Route::get('/', 'Admin\AdminController@index')->name('admin.admins.index');
                Route::get('/create', 'Admin\AdminController@create')->name('admin.admins.create');
                Route::post('/store', 'Admin\AdminController@store')->name('admin.admins.store');
                Route::get('/{id}/edit', 'Admin\AdminController@edit')->name('admin.admins.edit');
                Route::get('/{id}/delete', 'Admin\AdminController@delete')->name('admin.admins.delete');
            });
            Route::post('/update', 'Admin\AdminController@update')->name('admin.admins.update');
        });

        Route::prefix('users')->group(function () {
            Route::group(['middleware' => ['can:levelOne']], function () {
                Route::get('/create', 'Admin\UserController@create')->name('admin.users.create');
                Route::post('/store', 'Admin\UserController@store')->name('admin.users.store');
                Route::get('/{id}/edit', 'Admin\UserController@edit')->name('admin.users.edit');
                Route::post('/{id}/edit', 'Admin\UserController@update')->name('admin.users.update');
                Route::get('/{id}/delete', 'Admin\UserController@delete')->name('admin.users.delete');
            });
            Route::get('/', 'Admin\UserController@index')->name('admin.users.index');
            Route::get('/resend', 'Admin\UserController@resend')->name('admin.users.resend');
            Route::get('/{id}/reset', 'Admin\UserController@reset')->name('admin.users.reset');
        });

        Route::prefix('subscribers')->group(function () {
            Route::get('/', 'Guest\SubscriberController@index')->name('admin.subscribers.index');
        });

        Route::prefix('categories')->group(function () {
            Route::group(['middleware' => ['can:levelOne']], function () {
                Route::get('/create', 'Admin\CategoryController@create')->name('admin.categories.create');
                Route::post('/store', 'Admin\CategoryController@store')->name('admin.categories.store');
                Route::get('/{id}/edit', 'Admin\CategoryController@edit')->name('admin.categories.edit');
                Route::post('/update', 'Admin\CategoryController@update')->name('admin.categories.update');
                Route::get('/{id}/delete', 'Admin\CategoryController@delete')->name('admin.categories.delete');
            });
            Route::get('/', 'Admin\CategoryController@index')->name('admin.categories.index');
        });
    });
});
