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
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/user/index', 'User\UserController@index');
Route::get('/user/getList', 'User\UserController@getList');
Route::post('/user/update', 'User\UserController@update');
Route::get('/user/create/{uid?}', 'User\UserController@openFrom');
//Auth::routes();

//Route::get('/home', 'HomeController@index');