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

Route::name('productos_path')->get('/productos','ProductosController@listaProductos');
Route::name('producto_path')->get('/producto/{producto}','ProductosController@producto');
Route::get('/login','loginController@login');
