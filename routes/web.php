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

Route::get('/post/index', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::post('/post/create', 'PostController@store');
Route::get('/post/show', 'PostController@show');
Route::post('/post/show', 'PostController@delete');

Route::get('/user/index','UserController@index');
Route::get('/user/edit','UserController@edit');
Route::post('/user/edit','UserController@index');
Route::get('/user/add','UserController@add');
Route::post('/user/add','UserController@create');

Route::get('/auth/login', 'LoginController@getAuth');
Route::post('/auth/login', 'LoginController@postAuth');

