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
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', ['as' => 'home', 'uses' => 'ClientController@index']);

    Route::get('/create', ['as' => 'create', 'uses' => 'ClientController@create']);

    Route::post('/store', ['uses' => 'ClientController@store']);

    Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'ClientController@edit']);

    Route::post('/update/{id}', ['uses' => 'ClientController@update']);

    Route::get('/show/{id}', ['as' => 'show', 'uses' => 'ClientController@show']);

    Route::get('/destroy/{id}', ['uses' => 'ClientController@destroy']);

});

Auth::routes();
