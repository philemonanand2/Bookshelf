<?php

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

Route::get('/', 'bookscontroller@home');

Route::get('/index', 'bookscontroller@index');
Route::get('/orders', 'bookscontroller@orders');
Route::get('/show/id','bookscontroller@show'); 
Route::resource('books', 'bookscontroller');

Auth::routes();

Route::get('/dashboard', 'dashboardController@index')->name('home');
