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

/** 主页控制路由 */
Route::get('/','StaticPagesController@index')->name('/');

/** 资源控制路由 */
Route::resource('news','NewsController');
Route::resource('games','GamesController');
Route::resource('colleges','CollegesController');
Route::post('colleges/order','CollegesController@getByOrder')->name('colleges.order'); //POST order 参数 {'ballot'|'medals'} 以获取按order排序的书院

/** 登陆控制路由 */
Route::get('login','SessionController@login')->name('login');
Route::get('logout','SessionController@logout')->name('logout');
