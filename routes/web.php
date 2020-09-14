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

Route::get('/', 'HomeController@index');
Route::get('/get', 'HomeController@show')->name('get')->middleware('age');
Route::post('/post', 'HomeController@store')->name('post');
Route::put('/put', 'HomeController@update')->name('put');
Route::patch('/patch', 'HomeController@update_patch')->name('patch');
Route::delete('/delete', 'HomeController@destroy')->name('delete');
Route::get('/error', 'ErrorController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('post', 'PostController');
