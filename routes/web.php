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

Route::get('/', function () {return view('welcome');});
// Маршруты аутентификации...
Route::auth();/*
Route::get('/login', 'Auth\LoginController@getLogin');
Route::post('/login', 'Auth\LoginController@postLogin');
Route::get('/logout', 'Auth\LoginController@getLogout');

// Маршруты регистрации...
Route::get('register', 'Auth\RegisterController@getRegister');
Route::post('register', 'Auth\RegisterController@postRegister');
*/