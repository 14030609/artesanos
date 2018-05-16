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
Route::resource('MetodosPago','MetodosPagoController') ;
Route::get('/MetodosPago/delete/{id_MetodosPago}', ['as' => '/MetodosPago/delete', 'uses'=>'MetodosPagoController@delete']);
Route::post('/MetodosPago/search', ['as' => '/MetodosPago/search', 'uses'=>'MetodosPagoController@search']);


//rutas para MetodosPago
Route::resource('MetodosPago','MetodosPagoController') ;
Route::get('/MetodosPago/delete/{id_MetodosPago}', ['as' => '/MetodosPago/delete', 'uses'=>'MetodosPagoController@delete']);
Route::post('/MetodosPago/search', ['as' => '/MetodosPago/search', 'uses'=>'MetodosPagoController@search']);
Route::get('api/v1/MetodosPago','MetodosPagoController@serviceWeb');


//rutas para el CuponDescuentos
Route::resource('CuponDescuento','CuponDescuentoController') ;
Route::get('/CuponDescuento/delete/{id_CuponDescuento}', ['as' => '/CuponDescuento/delete', 'uses'=>'CuponDescuentoController@delete']);
Route::post('/CuponDescuento/search', ['as' => '/CuponDescuento/search', 'uses'=>'CuponDescuentoController@search']);

//rutas para el CuponDecuentos
Route::resource('Proveedor','ProveedorController') ;
Route::get('/Proveedor/delete/{id_Proveedor}', ['as' => '/Proveedor/delete', 'uses'=>'ProveedorController@delete']);
Route::post('/Proveedor/search', ['as' => '/Proveedor/search', 'uses'=>'ProveedorController@search']);

//rutas para el Surte
Route::resource('Surte','SurteController') ;
Route::get('/Surte/delete/{id_Surte}', ['as' => '/Surte/delete', 'uses'=>'SurteController@delete']);
Route::post('/Surte/search', ['as' => '/Surte/search', 'uses'=>'SurteController@search']);

//rutas para el Categoria
Route::resource('Categoria','CategoriaController') ;
Route::get('/Categoria/delete/{id_Categoria}', ['as' => '/Categoria/delete', 'uses'=>'CategoriaController@delete']);
Route::post('/Categoria/search', ['as' => '/Categoria/search', 'uses'=>'CategoriaController@search']);

//rutas para el Producto
Route::resource('Producto','ProductoController') ;
Route::get('/Producto/delete/{id_Producto}', ['as' => '/Producto/delete', 'uses'=>'ProductoController@delete']);
Route::post('/Producto/search', ['as' => '/Producto/search', 'uses'=>'ProductoController@search']);

//rutas para el Inventario
Route::resource('Inventario','InventarioController') ;
Route::get('/Inventario/delete/{id_Inventario}', ['as' => '/Inventario/delete', 'uses'=>'InventarioController@delete']);
Route::post('/Inventario/search', ['as' => '/Inventario/search', 'uses'=>'InventarioController@search']);


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

