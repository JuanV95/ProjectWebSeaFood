@extends('layouts.productos')

@section('productos')

	@foreach($Productos as $Producto)

		<div class="row">
					
			<div class="col-md-12">}

				<IMG class="pull-left" SRC="{{ asset('Imagenes/Salmon.jpg') }}" WIDTH=100 HEIGHT=100 BORDER=10  ALT="Logo frutos del mar">
				
				<h2><a href="{{route('producto_path', ['producto' => $Producto->id])}}">{{$Producto->nombre}}</a></h2>

				<p>{{$Producto->descripcion}}</p>

			</div>

		</div>

		<hr>

	@endforeach

	{{$Productos->render()}}
	
@endsection
