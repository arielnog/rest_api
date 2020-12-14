<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::namespace('API')->name('api.')->group(function () {
    Route::prefix('movies')->group(function (){
        Route::get('/', 'MoviesController@index')->name('movies_show');
        Route::post('/store','MoviesController@store')->name('movies_store');
        Route::put('/update/{id}', 'MoviesController@update')->name('movies_update');
        Route::delete('/delete/{id}', 'MoviesController@delete')->name('movies_delete');
    });

    Route::prefix('diretors')->group(function(){
        Route::get('/','DiretorsController@index')->name('diretor_show');

    });
});

