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

Route::get('/','UserController@index');
Route::post('/add', 'UserController@add');
Route::get('/getHero', 'UserController@getHeroes');
Route::post('/hero', 'UserController@hero');
Route::put('/hero/update/{id}', 'UserController@update');
Route::delete('/hero/delete/{id}', 'UserController@delete');
