<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'FriendsController@lists');
Route::get('/friends/find', 'FriendsController@find');
Route::get('/friends/all', 'FriendsController@all');
Route::get('/friends/around', 'FriendsController@around');
Route::post('/friends/add', 'FriendsController@add');
Route::resource('friends', 'FriendsController');

Route::get('/setting/', 'userController@getSetting');
Route::post('/setting/', 'userController@postSetting');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

