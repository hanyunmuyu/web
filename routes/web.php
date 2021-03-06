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
    //创建社团
    Route::get('/club/add', 'ClubController@add');
    //社团首页
    Route::get('/club', 'ClubController@index');
    //添加关注
    Route::post('/club/attention', 'ClubController@attention');
    //社团详情
    Route::get('/club/detail', 'ClubController@detail');
    //社团列表页
    Route::get('/club/list', 'ClubController@list');
    Route::get('/club/news', 'ClubController@news');
    //高校首页
    Route::get('/school', 'SchoolController@index');
    //高校列表页面
    Route::get('/school/list', 'SchoolController@list');


    Route::group(['middleware'=>'auth'],function (){
        //创建社团
        Route::post('/club/save', 'ClubController@save');


        //编辑用户信息
        Route::get('/user/edit', 'UserController@edit');
        //个人中心
        Route::get('/user/center', 'UserController@center');
        //实名认证
        Route::get('/user/auth', 'UserController@auth');
        //学生信息认证
        Route::get('/user/student', 'UserController@student');
        //更新用户信息
        Route::post('/user/update', 'UserController@update');

    });
});
Route::get('/home', 'HomeController@index')->name('home');
