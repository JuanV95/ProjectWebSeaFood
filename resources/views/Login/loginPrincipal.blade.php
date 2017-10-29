@extends('layouts.login')

@section('contenido')

<div class="row">
			
	<div class="col-md-12">
		
		<form action='\productos'>
			Nombre de usuario:<br>
			<input type="text" name="usuario"><br>
			Contraseña:<br>
			<input type="password" name="pass"><br><br>
			<input type="submit" value="Entrar">
		</form> 

	</div>

</div>

<hr>

@endsection






 