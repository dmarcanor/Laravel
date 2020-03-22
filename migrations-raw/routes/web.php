<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/crear/{nombre}', 'playerController@create');
Route::get('/mostrar', 'playerController@show');
Route::get('/eliminar/{table}', 'playerController@deleteAll');
Route::get('/eliminar/{table}/{id}', 'playerController@delete');
Route::get('/actualizar/{table}/{id}/{nombre}', 'playerController@update');