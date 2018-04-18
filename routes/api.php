<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('photo','PhotosController@store')->name('photo.store');
Route::delete('photo/{photo}','PhotosController@destroy')->name('photo.destroy');

Route::get('colleges','CollegesController@json');