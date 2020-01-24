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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/startGame', 'HomeController@startGame')->name('startGame');
Route::get('/logicInfo', 'HomeController@logicInfo')->name('logicInfo');
Route::get('/logicP', 'HomeController@logicP')->name('logicP');
