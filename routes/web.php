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


Route::get('/test','IndexController@index');


//后台模版引入首页
//采用中间件组，把后台的所有路由都控制，值流出来登录的
//Route::(['middleware' => ['web','admin.login']],['prefix' => 'admin'], function() {
Route::middleware(['web','admin.login'])->prefix('admin')->namespace('Admin')->group(function() {
    Route::get('index', 'IndexController@index');
//后台模板引入info
    Route::get('info', 'IndexController@info');
    Route::get('add', 'IndexController@add');
    Route::get('list', 'IndexController@list');
    Route::get('tab', 'IndexController@tab');
    Route::get('img', 'IndexController@img');
    Route::get('outlogin', 'LoginController@outlogin');
    Route::any('pass','IndexController@pass');
});
Route::prefix('admin')->namespace('Admin')->group(function() {
    Route::any('login', 'LoginController@login');
    Route::any('code', 'LoginController@code'); //验证码
    Route::get('outlogin', 'LoginController@outlogin');
    //Route::get('ses','LoginController@ses');
});

