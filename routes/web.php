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

Route::get('login', function () {
    return view('autenticacion.Funciones_login');
});



Route::get('pagina','KaizenController@pagina');

Route::get('ListaImagenes','KaizenController@getImageRelativePathsWfilenames');
Route::get('firebase','KaizenController@index');

Route::get('Leerbase','KaizenController@Leerbase');
Route::get('DevuelveBase','KaizenController@DevuelveBase');
Route::get('Info_Producto','KaizenController@Info_Producto');
Route::post('GuardaRegistro','KaizenController@GuardaRegistro');

Route::get('Vista','KaizenController@Vista');

Route::get('CarritoAgregarItem','KaizenController@CarritoAgregarItem');
Route::get('CarritoEliminaItem','KaizenController@CarritoEliminaItem');
Route::get('CarritoCambiaCanti','KaizenController@CarritoCambiaCanti');


Route::get('Detalle', function () {
    return view('Detalle_Producto');
});
 

Route::get('inventario', function () { return view('menu'); });

Route::get('listadoProductos','KaizenController@listadoProductos');


Route::post('Traslado','KaizenController@MongoStore'); //UTILITARIO TEMPORAL
Route::post('GuardaMongo','MongoController@Store');  //UTILITARIO TEMPORAL


//LO NUEVO
//Mongo

Route::get('admin', function () { return view('panel.menu'); });

Route::get('listaProductos','MongoController@listadoProductos');
Route::get('Resgistro','MongoController@Resgistro');
Route::post('GuardaProducto','MongoController@GuardaProducto');
Route::get('productos', 'MongoController@EditaProducto');

Route::get('EdicionMarcaModelo','MongoController@ListaMarcas');
Route::get('ListaModelos','MongoController@ListaModelos');
Route::get('nuevaMarca','MongoController@nuevaMarca');
Route::get('nuevoModelo','MongoController@nuevoModelo');
Route::post('ActualizaMarca','MongoController@ActualizaMarca');
Route::post('ActualizaModelo','MongoController@ActualizaModelo');

//Inventario

Route::get('Pre_recepcion', function () { return view('inventario.Pre_recepcion'); });





