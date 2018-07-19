<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Theses
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');});


Route::get('/home', 'MainController@index');
Route::post('answer', 'MainController@store')->name('answer.store');
Route::post('answer2', 'MainController@store2')->name('answer2.store2k');


//test pageにとぶ
Route::get('test', 'MainController@test')->name('test.take');

Route::get('result', 'MainController@show')->name('result.get');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

// user registration
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

//test2 page にとぶ
Route::get('test2', 'MainController@test2')->name('test2.take2');

//選ばれた食べ物を保存する
Route::post('food', 'FoodController@food_store')->name('food.store');
// Route::get('food', )

