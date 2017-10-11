<?php

namespace SeaFood\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //

    public function listaProductos(){

    	return view('productos.listaProductos');
    }

    public function producto(){

    	return view('productos.producto');
    }
}
