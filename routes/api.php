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

Route::prefix('v1')->group(function () {

    Route::prefix('users')->group(function () {
        // Route::middleware('auth:api')->get('/user', function (Request $request) {
        //     return $request->user();
        // });
        Route::get('/', 'API\UserController@index');
        Route::post('/', 'API\UserController@store');
        Route::get('/{id}', 'API\UserController@show');
        Route::patch('/{id}', 'API\UserController@update');
        Route::delete('/{id}', 'API\UserController@destroy');
    });

    Route::prefix('games')->group(function () {
        Route::get('/', 'API\GameController@index');
    });
});
