@extends('layouts.head')

@section('contenido')

	<div class="container">
				
		<div class="col-md-12">

			<IMG class="pull-left" SRC="{{ asset('Imagenes/Salmon.jpg') }}" WIDTH=100 HEIGHT=100 BORDER=100  ALT="Logo frutos del mar">
			<h2>{{$Producto->nombre}}</h2>
			<p>{{$Producto->descripcion}}</p>
			<h4>Precio: ${{$Producto->precio}} el kilo.</h4>

		</div>

	</div>

@endsection
