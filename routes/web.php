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
Route::get('/alipay','TestController@alpay');
Route::get('/test', 'TestController@index');
Route::get('/post', 'PostsController@index');
//用户管理
Route::get('/user', 'User\UserController@index');
Route::get('/user/getList', 'User\UserController@getList');
Route::post('/user', 'User\UserController@add');//新增
Route::patch('/user/{uid}', 'User\UserController@update');//编辑
Route::get('/user/open/{uid?}', 'User\UserController@openFrom');//打开新增编辑
Route::post('/user/del', 'User\UserController@del');//删除
Route::post('/user/check', 'User\UserController@check');//选择
//权限管理
Route::get('/permission', 'Entrust\PermissionController@index');
Route::get('/permission/getList/{page?}', 'Entrust\PermissionController@getList');
Route::post('/permission', 'Entrust\PermissionController@add');//新增
Route::patch('/permission/{id}', 'Entrust\PermissionController@update');//编辑
Route::post('/permission/del', 'Entrust\PermissionController@del');//删除
Route::get('/permission/open/{id?}', 'Entrust\PermissionController@openFrom');//打开新增编辑
Route::get('/permission/addChild/{fid}', 'Entrust\PermissionController@addChild');//打开新增编辑
//角色管理
Route::get('/role', 'Entrust\RoleController@index');
Route::get('/role/getList/{page?}', 'Entrust\RoleController@getList');
Route::post('/role', 'Entrust\RoleController@add');//新增
Route::patch('/role/{id}', 'Entrust\RoleController@update');//编辑
Route::post('/role/del', 'Entrust\RoleController@del');//删除
Route::get('/role/open/{id?}', 'Entrust\RoleController@openFrom');//打开新增编辑
//文章管理
Route::get('/article', 'Article\ArticleController@index');
Route::get('/article/getList/{page?}', 'Article\ArticleController@getList');
Route::post('/article', 'Article\ArticleController@add');//新增
Route::patch('/article/{id}', 'Article\ArticleController@update');//编辑
Route::get('/article/open/{id?}', 'Article\ArticleController@openFrom');//打开新增编辑

//Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/mongodb', 'TestController@index');
Auth::routes();

//Route::get('/home', 'HomeController@index');

