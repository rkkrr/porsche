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



Route::get('/', 'MainController@index');
Route::post('answer', 'MainController@store')->name('answer.store');
Route::post('answer2', 'MainController@store2')->name('answer2.store2');


//test pageにとぶ
Route::get('test', 'MainController@test')->name('test.take');

Route::get('result', 'MainController@show')->name('result.get');

//test2 page にとぶ
Route::get('test2', 'MainController@test2')->name('test2.take2');

