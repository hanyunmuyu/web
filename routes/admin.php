<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/3
 * Time: 10:30
 */
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@doLogin');
Route::group(['middleware'=>['adminMiddle']], function () {
    Route::get('/index', 'IndexController@index');
});
