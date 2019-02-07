@extends('layouts.app') <!--Hereda todo de la vista app.blade-->

@section('title', 'Trainers Create')<!--Le coloca nombre al modulo-->

@section('content') <!--invoca el contenido de app.blade-->
	<form class="form-group" method="post" action="/trainers">
		@csrf <!--componente de seguridad para el formulario-->
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="name" class="form-control">
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
@endsection







{{--<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
	<body>
		<div class="container">
			<div class="form-group">
				<label>Nombre</label>
				<input type="text" class="form-control">
			</div>

			<button type="submit" class="btn btn-primary">Guardar</button>
		</div>
	</body>
</html> --}}

