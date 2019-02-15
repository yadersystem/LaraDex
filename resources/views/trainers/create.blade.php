@extends('layouts.app') <!--Hereda todo de la vista app.blade-->

@section('title', 'Trainers Create')<!--Le coloca nombre al modulo-->

@section('content') <!--invoca el contenido de app.blade-->
	{!! Form::open(['route' => 'trainers.store','method'=>'POST','files'=>true]) !!}
		
		@include('trainers.form')

		{!! Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
	{!! Form::close() !!}
	
	{{-- <form class="form-group" method="post" action="/trainers" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="name" class="form-control">
		</div>

		<div class="form-group">
			<label>Slug</label>
			<input type="text" name="slug" class="form-control">
		</div>

		<div class="form-group">
			<label>Avatar</label>
			<input type="file" name="avatar">
		</div>

		<div class="form-group">
			<label>Descripcion</label>
			<textarea class="form-control" rows="5" name="des"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form> --}}
@endsection









