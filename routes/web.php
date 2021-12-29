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
Route::get('/', 'LoginController@index');

Route::get('/login', 'LoginController@index')->middleware('guest');
Route::post('/login', 'LoginController@authenticate')->middleware('guest');

Route::get('/logout', 'LoginController@logout');

Route::get('/register', 'RegisterController@index')->middleware('guest');
Route::post('/register', 'RegisterController@store')->middleware('guest');

Route::get('/forgot-password', 'ForgotPasswordController@index')->middleware('guest');
Route::post('forgot-password', 'ForgotPasswordController@changepass')->middleware('guest');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@formcreate')->middleware('auth');
Route::post('/posts/create', 'PostsController@create')->middleware('auth');

Route::get('/mypost', 'PostsController@mypost')->middleware('auth');
Route::post('/mypost/delete', 'PostsController@destroy')->middleware('auth');

// Route::resource('/editpost', 'PostsController');

Route::get('/mypost/edit/{id}', 'PostsController@edit')->middleware('auth');
Route::post('/mypost/edit/{id}', 'PostsController@update')->middleware('auth');

Route::get('/dashboard', 'DashboardController@index')->middleware('auth');
