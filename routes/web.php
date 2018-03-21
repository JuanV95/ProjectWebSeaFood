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

Route::get('/','ProductosController@listaProductos');
Route::name('productos_path')->get('/productos','ProductosController@listaProductos');
Route::name('producto_path')->get('/producto/{producto}','ProductosController@producto');
Route::get('/login','loginController@login');

Auth::routes();

Route::group(['middleware' => 'auth'], function(){

	/*Route::get('/administrador/menu','AdministradorController@menu');*/
	Route::get('/home', 'HomeController@index')->name('home');
	Route::name('administrador_path')->get('/administrador','HomeController@index')->name('home');
	Route::name('administrador_opcion_path')->get('/administrador/menu','AdministradorController@menu');
	Route::name('agregar_producto_path')->post('/administrador','AdministradorController@agregarProducto');
	Route::name('editar_producto_path')->get('/administrador/{producto}/editar','AdministradorController@editarProducto');
	Route::name('update_producto_path')->put('/administrador/{producto}','AdministradorController@updateProducto');
	Route::name('eliminar_producto_path')->delete('/administrador/{producto}','AdministradorController@eliminarProducto');

});

	
