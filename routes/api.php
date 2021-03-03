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
//user
Route::post('login', 'Api\AuthController@login');
Route::post('register', 'Api\AuthController@register');
Route::get('logout', 'Api\AuthController@logout');
Route::post('save_user_info', 'Api\AuthController@saveUserInfo')->middleware('jwtAuth');

//post
Route::post('posts/create', 'Api\PostController@create')->middleware('jwtAuth');
Route::post('posts/delete', 'Api\PostController@delete')->middleware('jwtAuth');
Route::post('posts/update', 'Api\PostController@update')->middleware('jwtAuth');
Route::get('posts', 'Api\PostController@posts')->middleware('jwtAuth');

//update data
Route::post('updates/create', 'Api\UpdatesController@create')->middleware('jwtAuth');
Route::post('updates/delete', 'Api\UpdatesController@delete')->middleware('jwtAuth');
Route::get('posts/updates','Api\UpdatesController@updates')->middleware('jwtAuth');
