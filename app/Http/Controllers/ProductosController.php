<?php

namespace SeaFood\Http\Controllers;

use Illuminate\Http\Request;
use SeaFood\Producto;

class ProductosController extends Controller
{
    //

    public function listaProductos(){

    	$Productos = Producto::all();

    	return view('productos.listaProductos')->with(['Productos' => $Productos]);
    }

    public function producto(Producto $Producto){

    	return view('productos.producto')->with(['Producto' => $Producto]);
    }
}
