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

Auth::routes();
Route::group(['namespace'=>'Home'],function (){
    Route::get('/', 'IndexController@index');
    //注册
    Route::get('/register', 'RegisterController@index')->name('register');
    Route::post('/register/register', 'RegisterController@doRegister');
    //登录
    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/login/doLogin', 'LoginController@doLogin');
    //编辑用户信息
    Route::get('/user/edit', 'UserController@edit');
    //创建社团
    Route::get('/club/add', 'ClubController@add');
    //社团首页
    Route::get('/club', 'ClubController@index');
    //社团列表页
    Route::get('/club/list', 'ClubController@list');
    //高校首页
    Route::get('/school', 'SchoolController@index');
    //高校列表页面
    Route::get('/school/list', 'SchoolController@list');


    Route::group(['middleware'=>'auth'],function (){
        //创建社团
        Route::post('/club/save', 'ClubController@save');
    });
});
Route::get('/home', 'HomeController@index')->name('home');
