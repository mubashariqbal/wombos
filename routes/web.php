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

use App\FontSource;


Route::get('/fonts', 'FontsController@index')->name('fonts.index');

// TODO!
# Route::get('/colors', 'ColorsController@inde')->name('colors.index');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
