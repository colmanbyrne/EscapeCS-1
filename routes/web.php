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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/startGame', 'HomeController@startGame')->name('startGame');
Route::get('/logicInfo', 'HomeController@logicInfo')->name('logicInfo');
Route::get('/logicP', 'HomeController@logicP')->name('logicP');
Route::get('/binaryHex', 'HomeController@binaryHex')->name('binaryHex');
Route::get('/assembler', 'HomeController@assembler')->name('assembler');
Route::get('/decomp', 'HomeController@decomp')->name('decomp');
Route::get('/c', 'HomeController@c')->name('c');
Route::post('/logicPA', 'HomeController@logicPA')->name('logicPA');
Route::get('/instructionset', 'HomeController@instructionset')->name('instructionset');
