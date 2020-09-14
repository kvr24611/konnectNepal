<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/welcome', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/user', 'UserController@index')->name('user');
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin.notifications', 'AdminController@notifications');
Route::get('/admin.users', 'AdminController@users');
Route::get('/admin.packages', 'AdminController@packages');
Route::get('/admin.subs', 'AdminController@subs');
Route::get('/admin.offers', 'AdminController@offers');

Route::get('/', 'LandingController@home');
Route::get('/about', 'LandingController@about');
Route::get('/contact', 'LandingController@contact');
Route::get('/offers', 'LandingController@offers');
Route::get('/services', 'LandingController@services');


Route::post('/offer','OffersController@store');





