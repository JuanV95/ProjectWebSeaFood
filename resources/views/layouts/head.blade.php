<html = lang="es">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
	<meta charset="utf-8">
	<link rel="shortcut icon" href="{{ asset('Imagenes/FrutosDelMar.ico') }}" rel="stylesheet">
	<title>Frutos Del Mar</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

	<div class="row"> 

			<div class="col-md-12">

				<IMG class="pull-left" SRC="{{ asset('Imagenes/FrutosDelMar.jpg') }}" WIDTH=178 HEIGHT=180 BORDER=2  ALT="Logo frutos del mar">
				<h1>Frutos Del Mar</h1>
				<p>Venta de productos marinos deliciosos y frescos</p>

			</div>

	</div>

	<hr>

	@include('layouts._errorAlEnviarFormulario')
	@include('layouts._mensajes')

	@yield('contenido')

</body>
</html>