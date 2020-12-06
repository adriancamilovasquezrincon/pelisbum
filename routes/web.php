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
    return view('welcome');
});

//Categorias

Route::get('/api/categorias', 'categoriasController@index');
Route::post('/api/categorias/guardar', 'categoriasController@store');
Route::put('/api/categorias/actualizar', 'categoriasController@update');
Route::delete('/api/categorias/eliminar', 'categoriasController@destroy');

//Peliculas

Route::get('/api/peliculas', 'peliculasController@index');
Route::post('/api/peliculas/guardar', 'peliculasController@store');
Route::put('/api/peliculas/actualizar', 'peliculasController@update');
Route::delete('/api/peliculas/eliminar', 'peliculasController@destroy');

//Clintes

Route::get('/api/clientes', 'clientesController@index');
Route::post('/api/clientes/guardar', 'clientesController@store');
Route::put('/api/clientes/actualizar', 'clientesController@update');
Route::delete('/api/clientes/eliminar', 'clientesController@destroy');

//Peliculasprestamo

Route::get('/api/prestamopeliculas', 'prestamopeliculasController@index');
Route::post('/api/prestamopeliculas/guardar', 'prestamopeliculasController@store');
Route::put('/api/prestamopeliculas/actualizar', 'prestamopeliculasController@update');
Route::delete('/api/prestamopeliculas/eliminar', 'prestamopeliculasController@destroy');
