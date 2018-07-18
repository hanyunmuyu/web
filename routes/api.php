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
    //社团列表
    Route::get('/club/index', 'ClubController@index');
    Route::post('/upload', 'UploadController@index');
});
