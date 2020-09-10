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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

Route::middleware('api')->get('/open', 'DataController@open');
Route::middleware(['api','jwt', 'jwtValidationForever'])->get('/closed', 'DataController@closed');
Route::middleware(['api','jwt' ])->get('/auth/invalidate/forever', 'AuthController@invalidateTokenForever');
Route::middleware(['api','jwt' ])->get('/auth/invalidate/temporary', 'AuthController@invalidateTokenTemporary');
Route::resource('post', 'PostController');
