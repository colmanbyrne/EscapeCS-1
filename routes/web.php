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
Route::get('/jvsc', 'HomeController@jvsc')->name('jvsc');
Route::get('/levels', 'HomeController@levels')->name('levels');
Route::get('/c', 'HomeController@c')->name('c');
Route::get('/cInfo', 'HomeController@cInfo')->name('cInfo');
Route::get('/javaInfo', 'HomeController@javaInfo')->name('javaInfo');
Route::get('/java', 'HomeController@java')->name('java');
Route::post('/javaPA', 'HomeController@javaPA')->name('javaPA');
Route::post('/logicPA', 'HomeController@logicPA')->name('logicPA');
Route::post('/assemblerPA', 'HomeController@assemblerPA')->name('assemblerPA');
Route::post('/cPA', 'HomeController@cPA')->name('cPA');
Route::post('/final', 'HomeController@final')->name('final');
Route::get('/instructionset', 'HomeController@instructionset')->name('instructionset');
Route::post('/feedback', 'HomeController@feedback')->name('feedback');
