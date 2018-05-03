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
//Route::resource('MetodosPago','MetodosPagoController') ;
//Route::get('/payment_method/delete/{id}', ['as' => '/payment_method/delete', 'uses'=>'PaymentMethodController@delete']);
//Route::post('/payment_method/search', ['as' => '/payment_method/search', 'uses'=>'PaymentMethodController@search']);

