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

Route::get('/', function () {
    return view('landing');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/single', function () {
    return view('single');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/portfolio-single', function () {
    return view('portfolio-single');
});

Route::get('/services', function () {
    return view('services');
});

Auth::routes();

Route::get('/user', 'UserController@index')->name('user');
Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin.notifications', 'AdminController@notifications');
Route::get('/admin.users', 'AdminController@users');
Route::get('/admin.packages', 'AdminController@packages');
Route::get('/admin.subs', 'AdminController@subs');
Route::get('/admin.offers', 'AdminController@offers');




