<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3
 * Time: 10:30
 */
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@doLogin');
Route::group(['middleware' => ['adminMiddle']], function () {
    Route::get('/index', 'IndexController@index');
    Route::get('/school/index', 'SchoolController@index');
    Route::get('/school/add', 'SchoolController@add');
    Route::post('/school/create', 'SchoolController@create');
    //新闻列表
    Route::get('/school/news', 'SchoolController@news');
    Route::get('/school/news/edit', 'SchoolController@editNews');
    Route::post('/school/news/update', 'SchoolController@updateNews');
    //删除新闻
    Route::post('/school/news/delete', 'SchoolController@deleteNews');
});
