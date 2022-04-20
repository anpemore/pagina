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

Route::get('/', 'ControllerPages@inicio')->name('inicio');

Route::get('plantilla','ControllerPages@plantilla')->name('plantilla');

Route::get('ingresar','ControllerPages@ingresar')->name('addclient');

Route::get('producto','ControllerPages@producto')->name('producto');

route::post('addproducto','ControllerPages@addproducto')->name('addproducto');;

Route::get('pedido','ControllerPages@pedido')->name('pedido');


Route::get('buscar','ControllerPages@buscar')->name('buscar');



Route::get('updatecliente','ControllerPages@updatecliente')->name('updatecliente');

Route::get('ventana/{id}','ControllerPages@updatePasiente')->name('updatePasiente');

route::post('/addpaciente','ControllerPages@addcrear')->name('addpaciente');

route::get('/pdf','pdfController@PDF')->name('descargarPdf');

route::post('/addNota','ControllerPages@addNota')->name('addNota');

Route::get('actualizar','ControllerPages@consultar')->name('consultar');

Route::get('/{id}','ControllerPages@detalles')->name('detalles');

Route::delete('eliminar/{id}','ControllerPages@eliminar')->name('eliminar');

route::put('updateNota/{id}','ControllerPages@updateNota')->name('updateNota');

/*
Route::get('arreglo/{dato?}','Controllerconsultar')->name('arreglo');
*/
