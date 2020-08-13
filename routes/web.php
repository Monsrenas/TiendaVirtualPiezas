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
    return view('Lista_Producto');
});

Route::get('login', function () {
    return view('autenticacion.Funciones_login');
});



Route::get('pagina','InventarioController@pagina');

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
Route::get('Pre', function () { return view('inventario.lista_prerecepcion'); });


/*Rutas privadas solo para usuarios autenticados*/
Route::group(['middleware' => 'auth'], function()
{
   		//Route::get('/', 'HomeController@showWelcome'); // Vista de inicio
		Route::get('/panel', function () { return view('panel.menu'); });

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
		Route::post('AddProductoRecepcion','MongoController@addItemPre_recepcion')->name('Pre_recepcion');
		Route::post('Recepcionar','InventarioController@Recepcionar');
		Route::get('ListadoRecepciones','InventarioController@ListadoRecepciones');

		//Usuarios
		
		
		//Operaciones Comunes
		Route::post('BorraItem','MongoController@BorraItem'); 
});


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
Route::post('RegistrarUsuario','MongoController@RegistrarUsuario');
Route::get('CreaBases', function () {
    return view('creabases');
});

