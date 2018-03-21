<?php

namespace SeaFood\Http\Controllers;

use Illuminate\Http\Request;
use SeaFood\Http\Requests\AgregarProductoRequest;
use SeaFood\Http\Requests\UpdateProductoRequest;
use SeaFood\Producto;

class AdministradorController extends Controller
{

    public function menuPrincipal(){

    	return view('Administrador.menuPrincipal');
    }

    public function menu(){

		$Productos = Producto::orderBy('id','desc')->paginate(10);
		
		return view('Administrador.listaProductosAdmin')->with(['Productos' => $Productos]);
    }

    public function agregarProducto(AgregarProductoRequest $request){

    	$Producto = new Producto;

    	$Producto->nombre = $request->get('nombre');
    	$Producto->descripcion = $request->get('descripcion');
    	$Producto->precio = $request->get('precio');

    	$Producto->save();

        session()->flash('mensaje', 'Producto agregado correctamente');

    	return redirect()->route('administrador_opcion_path', ['opcion'=>'modificar']);
    }

    public function editarProducto(Producto $producto){

    	return view('Administrador.editarProducto')->with(['Producto' => $producto]);

    }

    public function updateProducto(Producto $Producto, UpdateProductoRequest $request){

    	$Producto->nombre = $request->get('nombre');
    	$Producto->descripcion = $request->get('descripcion');
    	$Producto->precio = $request->get('precio');

    	$Producto->save();

        session()->flash('mensaje', 'Producto editado correctamente');

    	return redirect()->route('administrador_opcion_path', ['opcion'=>'modificar']);

    }

    public function eliminarProducto(Producto $Producto){

    	$Producto->delete();

        session()->flash('mensaje', 'Producto eliminado correctamente');

    	return redirect()->route('administrador_opcion_path', ['opcion'=>'modificar']);

    }


}
