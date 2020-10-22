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

Route::get('/tupu', function () {
    return 'hola prros';
});

Route::get('/tuchi', "Controller@saludo");

Route::get('/post', "PostController@mostrar");



Route::post('/registro', "users@store");

Route::get('/db',"PostController@mostrar");

Route::get('/persona',"users@mostrar");

Route::delete('/eliminar/{id}',"users@eliminar");


