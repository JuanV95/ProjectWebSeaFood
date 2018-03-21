@extends('layouts.head')

@section('contenido')

	<div class="container">

		<div class="row"> 

			<div class="col-md-12">

				<h1>Opciones de administrador</h1>
				
			</div>

		</div>

		<hr>

		<ul>
			
			<a href="{{route('administrador_opcion_path', ['opcion' => 'modificar'])}}"class="btn btn-info">Modificar productos</a> 

		</ul>
	
	</div>

@endsection