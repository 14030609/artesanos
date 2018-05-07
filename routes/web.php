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


//rutas para MetodosPago
Route::resource('MetodosPago','MetodosPagoController') ;
Route::get('/MetodosPago/delete/{id_MetodosPago}', ['as' => '/MetodosPago/delete', 'uses'=>'MetodosPagoController@delete']);
Route::post('/MetodosPago/search', ['as' => '/MetodosPago/search', 'uses'=>'MetodosPagoController@search']);

//rutas para Usuario
Route::resource('Usuario','UsuarioController') ;
Route::get('/Usuario/delete/{id_Usuario}', ['as' => '/Usuario/delete', 'uses'=>'UsuarioController@delete']);
Route::post('/Usuario/search', ['as' => '/Usuario/search', 'uses'=>'UsuarioController@search']);

//rutas para Rol
Route::resource('Rol','RolController') ;
Route::get('/Rol/delete/{id_Rol}', ['as' => '/Rol/delete', 'uses'=>'RolController@delete']);
Route::post('/Rol/search', ['as' => '/Rol/search', 'uses'=>'RolController@search']);

//rutas para Estado
Route::resource('Estado','EstadoController') ;
Route::get('/Estado/delete/{id_Estado}', ['as' => '/Estado/delete', 'uses'=>'EstadoController@delete']);
Route::post('/Estado/search', ['as' => '/Estado/search', 'uses'=>'EstadoController@search']);

//rutas para Ciudad
Route::resource('Ciudad','CiudadController') ;
Route::get('/Ciudad/delete/{id_Ciudad}', ['as' => '/Ciudad/delete', 'uses'=>'CiudadController@delete']);
Route::post('/Ciudad/search', ['as' => '/Ciudad/search', 'uses'=>'CiudadController@search']);

//rutas para Envio
Route::resource('Envios','EnviosController') ;
Route::get('/Envios/delete/{id_Envio}', ['as' => '/Envios/delete', 'uses'=>'EnviosController@delete']);
Route::post('/Envios/search', ['as' => '/Envios/search', 'uses'=>'EnvioController@search']);