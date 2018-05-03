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

