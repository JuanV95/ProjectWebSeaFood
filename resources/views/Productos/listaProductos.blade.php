@extends('layouts.productos')

@section('contenido')

	@foreach($Productos as $Producto)

		<div class="row">
					
			<div class="col-md-12">
				
				<h2><a href="{{route('producto_path', ['producto' => $Producto->id])}}">{{$Producto->nombre}}</a></h2>

				<p>{{$Producto->descripcion}}</p>

			</div>

		</div>

		<hr>

	@endforeach
			
@endsection
