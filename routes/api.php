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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/mahasiswa/all', 'MhsAPIController@all');

Route::post('/mahasiswa/create', 'MhsAPIController@create');

Route::post('/mahasiswa/edit/{id}', 'MhsAPIController@edit');

Route::delete('/mahasiswa/delete/{id}', 'MhsAPIController@delete');

// TASK Read ALL
Route::get('/task/read', 'TaskAPIController@read');

// Create Data
Route::post('/task/create', 'TaskAPIController@create');

// Update Data
Route::post('/task/update/{id}', 'TaskAPIController@update');

// Delete Data
Route::delete('/task/delete/{id}', 'TaskAPIController@delete');