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
    return view('index');
});

Route::get('/user/index', "UserController@index");

Route::get("/user/search", "UserController@searchUser");

Route::get("/user/show/{id}","UserController@show");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('calculate', "ChargeController@getCharge");