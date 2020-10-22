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
Route::get('/persona',"users@mostrar");
Route::post('/registro', "users@store");
Route::delete('/delete/{id}',"users@eliminar");
Route::put('/actualizar/{id}',"users@update");

Route::get('/post',"PostController@mostrar");
Route::post('/inser',"PostController@insertar");
Route::delete('/eliminar/{id}',"PostController@eliminar");
Route::put('/actualizar/{id}',"PostController@update");
Route::get('/coment/{id}',"PostController@VerComen");

Route::get('/coments',"ComentarioController@ver");
Route::post('/insertar',"ComentarioController@poner");
Route::delete('/eli/{id}',"ComentarioController@quitar");
Route::put('/actu/{id}',"ComentarioController@mejorar");


