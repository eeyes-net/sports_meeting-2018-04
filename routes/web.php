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

Route::get('login','SessionController@login')->name('login');
Route::get('logout','SessionController@logout')->name('logout');

//Route::get('/','StaticPagesController@index')->name('home');

Route::resource('news','NewsController');