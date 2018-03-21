@extends('layouts.head')

@section('contenido')

	<div class="container">

		<div class="row"> 

			<div class="col-md-12">

				<h1>Agregar nuevo producto</h1>
				
			</div>

		</div>

		<hr>

		@include('layouts._formularioProducto', ['Producto' => $Producto])
	
	</div>		


@endsection
