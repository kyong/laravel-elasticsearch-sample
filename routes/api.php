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
Route::group(['prefix' => 'jobs'], function() {
    Route::get('search','JobController@search');
    Route::get('/{id}','JobController@show');
    Route::post('/','JobController@store');
    Route::patch('search','JobController@update');
});
Route::group(['prefix' => 'companies'], function() {
    Route::get('/{id}','CompanyController@show');
});
