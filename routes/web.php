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
Route::get('/home', 'MainController@index')->name('psychotest.home');
Route::post('answer', 'MainController@store')->name('answer.store');
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
//選ばれた食べ物を保存する
Route::post('food', 'FoodController@food_store')->name('food.store');
//誘うボタンの実装
Route::group(['middleware' => 'auth'], function () {
    // Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::post('invite', 'InviteController@store')->name('user.invite');
        Route::delete('uninvite', 'InviteController@destroy')->name('user.uninvite');
        Route::get('invitings', 'MainController@invitings')->name('users.invitings');
        Route::get('inviters', 'MainController@inviters')->name('users.inviters');
});
    Route::get('test2', 'MainController@test2')->name('test2.take2');
});
Route::group(['middleware' =>['web']], function(){
    Route::delete('answer2', 'FoodController@destroy')->name('destroy.user');
    Route::get('answer2','FoodController@show')->name('food.show');
});

//一覧ページ
Route::get('testresult', 'MainController@testresult')->name('psychotest.testresult');
