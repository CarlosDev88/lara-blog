<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//RUTAS CATEGORIAS
Route::get('/categoriasapi','App\Http\Controllers\ApiCategoriesController@index');//mostrar todos los registros
Route::post('/categoriasapi','App\Http\Controllers\ApiCategoriesController@store');//crear un nuevo registro
Route::put('/categoriasapi/{id}','App\Http\Controllers\ApiCategoriesController@update');//actualizar un registro
Route::delete('/categoriasapi/{id}','App\Http\Controllers\ApiCategoriesController@destroy');//eliminar un registro

//RUTAS POSTS
Route::get('/postsapi','App\Http\Controllers\ApiPostController@index');
Route::post('/postsapi','App\Http\Controllers\ApiPostController@store');
Route::put('/postsapi/{id}','App\Http\Controllers\ApiPostController@update');
Route::delete('/postsapi/{id}','App\Http\Controllers\ApiPostController@destroy');
