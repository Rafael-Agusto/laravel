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

Route::get('/', 'Controller@index');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@authenticate');

Route::get('/logout', 'LoginController@logout');

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@store');

Route::get('/forgot-password', 'ForgotPasswordController@index')->middleware('guest');
Route::post('forgot-password', 'ForgotPasswordController@changepass');
