<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['prefix' => 'v1', 'namespace' => 'v1'], function () {
    Route::get('/', 'IndexController@index');
    //校园列表
    Route::get('/school/index', 'SchoolController@index');
    Route::get('/school/all', 'SchoolController@all');
    //高校详情
    Route::get('/school/detail', 'SchoolController@detail');
    Route::get('/school/news', 'SchoolController@news');
    Route::get('/school/recommend', 'SchoolController@recommend');
    //社团列表
    Route::post('/register', 'RegisterController@doRegister');
    Route::get('/club/index', 'ClubController@index');
    Route::get('/club/category', 'ClubController@category');
    Route::post('/upload', 'UploadController@index');
    Route::post('/login', 'LoginController@doLogin');
    Route::group(['namespace' => 'profile', 'prefix' => 'profile', 'middleware' => ['apiMiddleware']], function () {
        Route::get('/user', 'UserController@index');
        //编辑用户头像
        Route::post('/user/updateAvatar', 'UserController@updateAvatar');
        Route::post('/club/create', 'ClubController@create');
        //关注社团
        Route::post('/club/attention', 'ClubController@payAttention');



        //关注校园
        Route::post('/school/attention', 'SchoolController@payAttention');

        Route::post('/school/signIn', 'SchoolController@signIn');

        Route::get('/user/message', 'MessageController@index');
    });
});
