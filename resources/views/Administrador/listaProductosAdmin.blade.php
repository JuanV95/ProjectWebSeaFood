@extends('layouts.productos')

@section('productos')

	<small class="pull-left">

		<a href="{{route('administrador_opcion_path', ['opcion' => 'agregar'])}}" class="btn btn-info">Agregar producto</a> 
		<hr>
		
	</small>

	@foreach($Productos as $Producto)

		<div class="row">
					
			<div class="col-md-12">
				
				<h2>

					<a href="{{route('producto_path', ['producto' => $Producto->id])}}">{{$Producto->nombre}}</a>

					<small class="pull-right">
						
						<a href="{{route('editar_producto_path', ['Producto' => $Producto->id])}}" class="btn btn-info">Editar</a>
						<form action="{{ route('eliminar_producto_path', ['Producto' => $Producto->id]) }}" method="POST">

							{{csrf_field()}}
							{{method_field('DELETE')}}

							<button type="submit" class="btn btn-danger">Eliminar</button>

						</form>

					</small>

				</h2>

				<p>{{$Producto->descripcion}}</p>

			</div>

		</div>

		<hr>

	@endforeach

	{{$Productos->render()}}
	
@endsection
