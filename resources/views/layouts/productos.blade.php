@extends('layouts.head')

@section('contenido')

	<div class="container">

		<div class="row"> 

			<div class="col-md-12">

				<h1>Lista de Productos</h1>
				
			</div>

		</div>

		<hr>

		@yield('productos')
	
	</div>

@endsection



