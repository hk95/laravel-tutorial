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

Route::post('/hero/create', 'HeroController@createHero');
Route::get('/hero/get', 'HeroController@getHeroes');
Route::get('/hero/get/{id}', 'HeroController@getHero');
Route::put('/hero/update/{id}', 'HeroController@updateHero');
Route::delete('/hero/delete/{id}', 'HeroController@deleteHero');
