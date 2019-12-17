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
Route::get('/auth/register_done', 'Controller@registerdone')->middleware('auth');

Route::get('/post/index', 'PostController@index');
Route::get('/post/create', 'PostController@create')->middleware('auth');
Route::post('/post/create', 'PostController@store')->middleware('auth');
Route::get('/post/show', 'PostController@show');
Route::post('/post/show', 'PostController@delete')->middleware('auth');

Route::get('/user/profile', 'UserController@profile');
Route::get('/user/edit', 'UserController@edit')->middleware('auth');
Route::post('/user/edit', 'UserController@update')->middleware('auth');
Route::get('/user/delete', 'UserController@show')->middleware('auth');
Route::post('/user/delete', 'UserController@delete')->middleware('auth');

Route::get('user/logout', 'LogoutController@getlogout')->middleware('auth');

Auth::routes();



