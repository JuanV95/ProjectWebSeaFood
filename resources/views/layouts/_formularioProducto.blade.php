
@if($Producto->exists)

	<form action="{{ route('update_producto_path', ['Producto' => $Producto->id]) }}" method="POST">

		{{method_field('PUT')}}

@else

	<form action="{{ route('agregar_producto_path') }}" method="POST">

@endif	

	{{csrf_field()}}

	<div class="form-grup">

		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" class="form-control" value="{{$Producto->nombre or old('nombre')}}"/>

	</div>

	<div class="form-grup">

		<label for="descripccion">Descripcion:</label>
		<textarea rows="5" name="descripcion" class="form-control">{{$Producto->descripcion or old('descripcion')}}</textarea> 

	</div>

	<div class="form-grup">

		<label for="precio">Precio:</label>
		<input type="number" name="precio" class="form-control" value="{{$Producto->precio or old('precio')}}"/>

	</div>

	<div class="form-grup">

		<button type="submit" class="btn btn-primary">Gurardar</button>

	</div>

</form>