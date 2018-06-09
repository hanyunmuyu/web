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
    Route::get('/register', 'RegisterController@index')->name('register');
    Route::post('/register/register', 'RegisterController@doRegister');
    Route::get('/login', 'LoginController@index')->name('login');
    Route::get('/logout', 'LoginController@index');
    Route::get('/user/edit', 'UserController@edit');
    Route::get('/club/add', 'ClubController@add');
    Route::get('/club', 'ClubController@index');
});
Route::get('/home', 'HomeController@index')->name('home');
