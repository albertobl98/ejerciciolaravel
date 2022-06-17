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

Route::get('/usuarios', 'App\Http\Controllers\UsuarioController@intex');
Route::get('/borrar/{id}', 'App\Http\Controllers\BorrarControlador@borrar');
Route::get('/borrarPeli/{id}', 'App\Http\Controllers\borrarPelis@borrar');

Route::get('/editarForm/{id}', 'App\Http\Controllers\EditarControlador@usuario');
Route::post('/editar/{id}', 'App\Http\Controllers\EditarControlador@editar');

Route::post('/insertar', 'App\Http\Controllers\InsertarControlador@insertar');
Route::get('/insertarForm', function(){
    return view('insertar.index');
});
Route::get('/insertarPelisForm', function(){
    return view('insertarPelis.index');
});
Route::get('/peliculas', 'App\Http\Controllers\pelisControlador@intex');