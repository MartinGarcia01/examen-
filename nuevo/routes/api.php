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

Route::post('login', 'AuthController@userAuth');
Route::resource('publicacion', 'PublicacionControler');
//Route::post('recover', 'AuthController@recover');
Route::group(['middleware' => ['jwt.auth']], function() {
	Route::resource('users', 'userControler');
	
});

