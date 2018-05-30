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

//rutas para Venta
Route::resource('Venta','VentaController') ;
Route::get('/Venta/delete/{id_Venta}', ['as' => '/Venta/delete', 'uses'=>'VentaController@delete']);
Route::post('/Venta/search', ['as' => '/Venta/search', 'uses'=>'VentaController@search']);
Route::get('api/v1/Venta','VentaController@serviceWeb');
//Route::post('/Venta/insertar', ['as' => '/Venta/insertar', 'uses'=>'detalleVentaController@insertar']);

Route::get('/Venta/insertar/{id_Venta}', ['as' => '/Venta/insertar', 'uses'=>'VentaController@insertar']);
Route::get('/Venta/mostrar/{id_Venta}', ['as' => '/Venta/mostrar', 'uses'=>'VentaController@mostrar']);
Route::get('api/v1/Venta','VentaController@serviceWeb');
//Route::get('/Venta/insertar/{id_Venta}',['as'=>'/Venta/insertar','VentaController@insertar']);


//rutas para detalleVenta
Route::resource('detalleVenta','detalleVentaController') ;
Route::get('/detalleVenta/delete/{id_Venta}', ['as' => '/detalleVenta/delete', 'uses'=>'detalleVentaController@delete']);
Route::post('/detalleVenta/search', ['as' => '/detalleVenta/search', 'uses'=>'detalleVentaController@search']);



Route::get('api/v1/detalleVenta','detalleVentaController@serviceWeb');


Route::resource('Reportes','ReporteController') ;
Route::get('/reporte_grafica', ['as' => '/reporte_grafica', 'uses'=>'ReporteController@grafica']);




//rutas para el CuponDescuentos
Route::resource('CuponDescuento','CuponDescuentoController') ;
Route::get('/CuponDescuento/delete/{id_CuponDescuento}', ['as' => '/CuponDescuento/delete', 'uses'=>'CuponDescuentoController@delete']);
Route::post('/CuponDescuento/search', ['as' => '/CuponDescuento/search', 'uses'=>'CuponDescuentoController@search']);
Route::get('api/v1/CuponDescuento','CuponDescuentoController@serviceWeb');


//rutas para el proveedor
Route::resource('Proveedor','ProveedorController') ;
Route::get('/Proveedor/delete/{id_Proveedor}', ['as' => '/Proveedor/delete', 'uses'=>'ProveedorController@delete']);
Route::post('/Proveedor/search', ['as' => '/Proveedor/search', 'uses'=>'ProveedorController@search']);
Route::get('api/v1/Proveedor','ProveedorController@serviceWeb');


//rutas para el Surte
Route::resource('Surte','SurteController') ;
Route::get('/Surte/delete/{id_Proveedor}/{id_Producto}/{fecha}', ['as' => '/Surte/delete', 'uses'=>'SurteController@delete']);
Route::post('/Surte/search', ['as' => '/Surte/search', 'uses'=>'SurteController@search']);
Route::get('api/v1/Surte','SurteController@serviceWeb');

//rutas para el Categoria
Route::resource('Categoria','CategoriaController') ;
Route::get('/Categoria/delete/{id_Categoria}', ['as' => '/Categoria/delete', 'uses'=>'CategoriaController@delete']);
Route::post('/Categoria/search', ['as' => '/Categoria/search', 'uses'=>'CategoriaController@search']);
Route::get('api/v1/Categoria','CategoriaController@serviceWeb');

//rutas para el Producto
Route::resource('Producto','ProductoController') ;
Route::get('/Producto/delete/{id_Producto}', ['as' => '/Producto/delete', 'uses'=>'ProductoController@delete']);
Route::post('/Producto/search', ['as' => '/Producto/search', 'uses'=>'ProductoController@search']);
Route::get('api/v1/Producto','ProductoController@serviceWeb');

//rutas para el Inventario
Route::resource('Inventario','InventarioController') ;
Route::get('/Inventario/delete/{id_Inventario}', ['as' => '/Inventario/delete', 'uses'=>'InventarioController@delete']);
Route::post('/Inventario/search', ['as' => '/Inventario/search', 'uses'=>'InventarioController@search']);
Route::get('api/v1/Inventario','InventarioController@serviceWeb');

//rutas para Usuario
Route::resource('Usuario','UsuarioController') ;
Route::get('/Usuario/delete/{id_Usuario}', ['as' => '/Usuario/delete', 'uses'=>'UsuarioController@delete']);
Route::post('/Usuario/search', ['as' => '/Usuario/search', 'uses'=>'UsuarioController@search']);
Route::get('/Usuario/edit', ['as' => '/Usuario/edit', 'uses'=>'UsuarioController@edit']);
Route::get('api/v1/Usuario','UsuarioController@serviceWeb');


//rutas para Rol
Route::resource('Rol','RolController') ;
Route::get('/Rol/delete/{id_Rol}', ['as' => '/Rol/delete', 'uses'=>'RolController@delete']);
Route::post('/Rol/search', ['as' => '/Rol/search', 'uses'=>'RolController@search']);
Route::get('api/v1/Rol','RolController@serviceWeb');

//rutas para Estado
Route::resource('Estado','EstadoController') ;
Route::get('/Estado/delete/{id_Estado}', ['as' => '/Estado/delete', 'uses'=>'EstadoController@delete']);
Route::post('/Estado/search', ['as' => '/Estado/search', 'uses'=>'EstadoController@search']);
Route::get('api/v1/Estado','EstadoController@serviceWeb');

//rutas para Ciudad
Route::resource('Ciudad','CiudadController') ;
Route::get('/Ciudad/delete/{id_Ciudad}', ['as' => '/Ciudad/delete', 'uses'=>'CiudadController@delete']);
Route::post('/Ciudad/search', ['as' => '/Ciudad/search', 'uses'=>'CiudadController@search']);
Route::get('api/v1/Prodcucto','CiudadController@serviceWeb');



//rutas para Envio
Route::resource('Envios','EnviosController') ;
Route::get('/Envios/delete/{id_Envio}', ['as' => '/Envios/delete', 'uses'=>'EnviosController@delete']);
Route::post('/Envios/search', ['as' => '/Envios/search', 'uses'=>'EnviosController@search']);
Route::get('api/v1/Envio','EnviosController@serviceWeb');
