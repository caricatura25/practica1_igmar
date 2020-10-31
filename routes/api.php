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
Route::get('/usuario',"users@mostrar");
Route::post('/usuario', "users@insertar");
Route::delete('/usuario/{id}',"users@eliminar");
Route::put('/usuario/{id}',"users@update");

Route::get('/post',"PostController@mostrar");
Route::post('/post',"PostController@insertar");
Route::delete('/post/{id}',"PostController@eliminar");
Route::put('/post/{id}',"PostController@update");
Route::get('/post/{id}',"PostController@VerComentarios");

Route::get('/comentarios',"ComentarioController@mostrar");
Route::post('/comentarios',"ComentarioController@insertar");
Route::delete('/comentarios/{id}',"ComentarioController@eliminar");
Route::put('/comentarios/{id}',"ComentarioController@update");

Route::get('/persona',"PersonasController@mostrar")->middleware('verificaedad');
Route::post('/persona',"PersonasController@insertar")->middleware('verificaedad');
Route::delete('/persona/{id}',"PersonasController@eliminar");
Route::put('/persona/{id}',"PersonasController@update");
Route::post('/person',"PersonasController@registroT");


