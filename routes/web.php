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

Route::get('/', 'ProductController@index');

Route::get('/products', 'ProductController@index');

Route::get('/show', 'ProductController@show');

Route::get('/profile', 'ProfileController@DisplayName');

Route::post('/products', 'ProductController@create');
