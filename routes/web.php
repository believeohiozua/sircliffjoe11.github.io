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

// Route::group(['middleware' => ['auth']], function () {

//     Route::prefix('profile')->group(function () {
//         Route::get('/', 'User\ProfileController@create')->name('profile.create');
//         Route::post('/', 'User\ProfileController@store')->name('profile.store');
//         Route::get('update', 'User\ProfileController@edit')->name('profile.edit');
//         Route::post('update-avatar', 'User\ProfileController@updateAvatar')->name('profile.update-avatar');
//         Route::post('update-personal', 'User\ProfileController@updatePersonal')->name('profile.update-personal');
//         Route::post('update-password', 'User\ProfileController@updatePassword')->name('profile.update-password');
//     });

//     Route::prefix('orders')->group(function () {
//         Route::get('/', 'User\OrderController@index')->name('order.index');
//         Route::get('create', 'User\OrderController@create')->name('order.create');
//         Route::post('create', 'User\OrderController@store')->name('order.store');
//     });

//     Route::prefix('payments')->group(function () {
//         Route::get('/', 'User\PaymentController@index')->name('payments.index');
//         Route::post('submit-proof', 'User\PaymentController@update')->name('payments.update');
//     });

//     Route::prefix('payouts')->group(function () {
//         Route::get('/', 'User\PayoutController@index')->name('payouts.index');
//         Route::post('/', 'User\PayoutController@received')->name('payouts.received');
//     });
// });




Route::get('/home', 'Member\HomeController@index')->name('home');
Route::view('my-campaigns', 'member.pages.my-campaigns')->name('my-campaigns');
Route::view('latest-activity', 'member.pages.latest-activity')->name('latest-activity');
Route::view('create-idea', 'member.pages.create-idea')->name('create-idea');
Route::view('create-campaign', 'member.pages.create-campaign')->name('create-campaign');
Route::view('new-campaign', 'member.pages.new-campaign')->name('new-campaign');

Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/edit-profile', 'UserController@update_avatar')->name('edit-profile');

Route::get('idea.my-ideas', 'IdeaController@index')->name('my-ideas');
Route::get('my-ideas', 'IdeaController@create')->name('my-ideas');
Route::post('my-ideas', 'IdeaController@store')->middleware('auth');
