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


//rutas para el metodo
Route::resource('MetodosPago','MetodosPagoController') ;
Route::get('/MetodosPago/delete/{id_MetodosPago}', ['as' => '/MetodosPago/delete', 'uses'=>'MetodosPagoController@delete']);
Route::post('/MetodosPago/search', ['as' => '/MetodosPago/search', 'uses'=>'MetodosPagoController@search']);

//rutas para el CuponDecuentos
//rutas para el CuponDecuentos
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
