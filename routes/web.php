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

Route::get('/', function () {
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


// Route::get('/users', function () {
//     return view('admin.users');
// });

// Route::get('/subs', function () {
//     return view('admin.subs');
// });

// Route::get('/packages', function () {
//     return view('admin.packages');
// });

// Route::get('/notifications', function () {
//     return view('admin.notifications');
// });

// Route::get('/offers', function () {
//     return view('admin.offers');
// });