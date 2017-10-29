@extends('layouts.productos')

@section('contenido')

	<div class="row">
				
		<div class="col-md-12">
			
			<h2>{{$Producto->nombre}}</h2>
			<p>{{$Producto->descripcion}}</p>

		</div>

	</div>

@endsection
