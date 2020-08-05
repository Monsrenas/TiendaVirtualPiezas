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


Route::get('/', function () {
    return view('Lista_Producto');
});

Route::get('/cat', function () {
    return view('categorias');
});
 

Route::get('inventario', function () { return view('menu'); });

Route::get('listadoProductos','KaizenController@listadoProductos');


//LO NUEVO

Route::get('admin', function () { return view('panel.menu'); });


Route::get('listaProductos','MongoController@listadoProductos'); //cambiar de controlador 



//Mongo
 
Route::post('GuardaMongo','MongoController@Store');

Route::get('Llena', function () {
    return view('temporal');
});
Route::post('Traslado','KaizenController@MongoStore');


Route::post('GuardaProducto','MongoController@GuardaProducto');
Route::get('EdicionMarcaModelo','MongoController@ListaMarcas');
Route::get('ListaModelos','MongoController@ListaModelos');
Route::get('/nuevaMarca/{id?}','MongoController@nuevaMarca')->name('nuevaMarca');
Route::post('ActualizaMarca','MongoController@ActualizaMarca');
Route::get('Resgistro','MongoController@Resgistro');


Route::get('productos', 'MongoController@EditaProducto');


