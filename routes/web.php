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

Route::get('/', function () {
    $first_name = 'Nikola';

    return view('simple', compact('first_name'));
});

Route::get('/get', function(){
    return 'get route';
})->name('get')->middleware('age');

Route::post('/post', function($value = 'post route'){
    return $value;
})->name('post');

Route::put('/put', function ($value = 'put route') {
    return $value;
})->name('put');

Route::patch('/patch', function($value = 'patch route'){
    return $value;
})->name('patch');

Route::delete('/delete', function ($value='delete route') {
    return $value;
})->name('delete');
