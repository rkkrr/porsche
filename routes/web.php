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

Route::get('/', function () {
    return view('welcome');
});

Route::get('a', 'MainController@index');
Route::post('answer', 'MainController@store')->name('answer.store');

//test pageにとぶ
Route::get('test', 'MainController@test')->name('test.take');

Route::get('result', 'MainController@show')->name('result.get');

