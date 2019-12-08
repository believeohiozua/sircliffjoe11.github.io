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

Route::prefix('admin')->group(function(){
    // Admin guest routes
    Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.submit');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');
    
    // Admin auth routes
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::prefix('settings')->group(function(){
            Route::get('/', 'Admin\SettingController@index')->name('admin.settings');
            Route::post('/', 'Admin\SettingController@update')->name('admin.settings.update');
        });

        Route::prefix('profile')->group(function(){
            Route::get('/', 'Admin\AdminController@show')->name('admin.admins.show');
        });

        Route::prefix('admins')->group(function(){
            Route::group(['middleware' => ['can:levelOne'] ], function () {
                Route::get('/', 'Admin\AdminController@index')->name('admin.admins.index');
                Route::get('/create', 'Admin\AdminController@create')->name('admin.admins.create');
                Route::post('/store', 'Admin\AdminController@store')->name('admin.admins.store');
                Route::get('/{id}/edit', 'Admin\AdminController@edit')->name('admin.admins.edit');
                Route::get('/{id}/delete', 'Admin\AdminController@delete')->name('admin.admins.delete');
            });
            Route::post('/update', 'Admin\AdminController@update')->name('admin.admins.update');
        });
        
        Route::prefix('applications')->group(function(){  
            Route::get('/', 'Admin\ApplicationController@index')->name('admin.applications.index');
            Route::get('/{id}/dismiss', 'Admin\ApplicationController@dismiss')->name('admin.applications.dismiss');
            Route::post('approve', 'Admin\ApplicationController@approve')->name('admin.applications.approve');
        });
        
        Route::prefix('users')->group(function(){  
            Route::group(['middleware' => ['can:levelOne'] ], function () {
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
        
        Route::prefix('products')->group(function(){  
            Route::get('/', 'Admin\ProductController@index')->name('admin.products.index');            
            Route::get('/create', 'Admin\ProductController@create')->name('admin.products.create');
            Route::post('/store', 'Admin\ProductController@store')->name('admin.products.store');
            Route::get('/{id}/edit', 'Admin\ProductController@edit')->name('admin.products.edit');
            Route::post('/{id}/edit', 'Admin\ProductController@update')->name('admin.products.update');
            Route::get('/{id}/delete', 'Admin\ProductController@delete')->name('admin.products.delete');
        });
        
        Route::prefix('orders')->group(function(){  
            Route::get('/', 'Admin\OrderController@index')->name('admin.orders.index');
            Route::get('/{id}/edit', 'Admin\OrderController@edit')->name('admin.orders.edit');
            Route::get('/{id}/approve', 'Admin\OrderController@approve')->name('admin.orders.approve');
            Route::post('/{id}/edit', 'Admin\OrderController@update')->name('admin.orders.update');
            Route::get('/{id}/delete', 'Admin\OrderController@delete')->name('admin.orders.delete');
        });
        
        Route::prefix('packages')->group(function(){  
            Route::get('/', 'Admin\PackageController@index')->name('admin.packages.index');
        });
        
        Route::prefix('slots')->group(function(){  
            Route::get('/', 'Admin\SlotController@index')->name('admin.slots.index');
        }); 
        
        Route::prefix('payments')->group(function(){  
            Route::get('/', 'Admin\PaymentController@index')->name('admin.payments.index');
            Route::get('/{id}/approve', 'Admin\PaymentController@approve')->name('admin.payments.approve');
            Route::get('/{id}/reject', 'Admin\PaymentController@reject')->name('admin.payments.reject');
        });  
        
        Route::prefix('payouts')->group(function(){  
            Route::get('/', 'Admin\PayoutController@index')->name('admin.payouts.index');
            Route::get('print', 'Admin\PayoutController@print')->name('admin.payouts.print');
            Route::get('/{id}/approve', 'Admin\PayoutController@approveOne')->name('admin.payouts.approveOne');
            Route::get('approve', 'Admin\PayoutController@approveAll')->name('admin.payouts.approveAll');
        });     
    });
});


    