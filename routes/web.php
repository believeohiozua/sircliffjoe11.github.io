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
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|p
 */
Auth::routes(['verify' => true, 'reset' => true]);
// Route::post('login', 'Guest\LoginController@login')->name('login');
// Route::get('logout', 'Guest\LoginController@logout')->name('user.logout');


Route::view('/', 'guest.pages.welcome')->name('welcome');
Route::view('discover', 'guest.pages.discover')->name('discover');
Route::view('pricing', 'guest.pages.pricing')->name('pricing');
Route::view('how-it-works', 'guest.pages.how-it-works')->name('how-it-works');
Route::view('help', 'guest.pages.help')->name('help');
Route::view('campaigns', 'guest.pages.campaigns')->name('campaigns');
Route::view('about', 'guest.pages.about')->name('about');
Route::view('blog', 'guest.pages.blog')->name('blog');
Route::view('career', 'guest.pages.career')->name('career');
Route::view('privacy', 'guest.pages.privacy')->name('privacy');
Route::view('terms', 'guest.pages.terms')->name('terms');
Route::view('donate', 'guest.pages.donate')->name('donate');
Route::view('mentor', 'guest.pages.mentor')->name('mentor');
Route::view('support', 'guest.pages.support')->name('support');
Route::view('settings', 'guest.pages.settings')->name('settings');
Route::view('countries', 'guest.pages.countries')->name('countries');



/*
|--------------------------------------------------------------------------
| User Web Routes
|--------------------------------------------------------------------------
|
 */ 

// Route::get('/', 'User\DashboardController@index')->name('welcome');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'User\UserController@index')->name('home');

    Route::get('/profile', 'User\UserController@profile')->name('profile');
    Route::get('/edit-profile', 'User\UserController@edit')->name('edit');

    Route::prefix('ideas')->group(function () {
        Route::get('/', 'User\IdeaController@index')->name('ideas.index');
        Route::get('/create', 'User\IdeaController@create')->name('ideas.create');
        Route::post('/store', 'User\IdeaController@store')->name('ideas.store');
        Route::get('/{id}/show', 'User\IdeaController@show')->name('ideas.show');
        Route::get('/{id}/edit', 'User\IdeaController@edit')->name('ideas.edit');
        Route::post('/update', 'User\IdeaController@update')->name('ideas.update');
        Route::get('/{id}/delete', 'User\IdeaController@delete')->name('ideas.delete');
    });

    Route::prefix('campaigns')->group(function () {
        Route::get('/', 'User\CampaignController@index')->name('campaigns.index');
        Route::get('/create', 'User\CampaignController@create')->name('campaigns.create');
        Route::post('/store', 'User\CampaignController@store')->name('campaigns.store');
        Route::get('/{id}/show', 'User\CampaignController@show')->name('campaigns.show');
        Route::get('/{id}/edit', 'User\CampaignController@edit')->name('campaigns.edit');
        Route::post('/update', 'User\CampaignController@update')->name('campaigns.update');
        Route::get('/{id}/delete', 'User\CampaignController@delete')->name('campaigns.delete');
    });

    // Route::view('activity', 'user.pages.activity')->name('latest-activity');
});
