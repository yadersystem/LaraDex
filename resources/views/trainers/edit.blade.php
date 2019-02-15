@extends('layouts.app') <!--Hereda todo de la vista app.blade-->

@section('title', 'Trainers Edit')<!--Le coloca nombre al modulo-->

@section('content') <!--invoca el contenido de app.blade-->
	{!! Form::model($trainer,['route'=>['trainers.update',$trainer],'method'=>'PUT','files'=>true]) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name',null,['class'=>'form-control'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('slug','Slug') !!}
			{!! Form::text('slug',null,['class'=>'form-control'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('avatar','Avatar') !!}
			{!! Form::file('avatar')!!}
		</div>

		<div class="form-group">
			{!! Form::label('des','Descripcion') !!}
			{!! Form::textarea('des',null,['class'=>'form-control','rows'=>'5'])!!}
		</div>
		{!! Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	{!! Form::close() !!}

	{{-- <form class="form-group" method="post" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
		@method('PUT') <!-- esto envia datos ocultos -->
		@csrf <!--componente de seguridad para el formulario-->
		<div class="form-group">
			<label>Nombre</label>
			<input type="text" name="name" class="form-control" value="{{ $trainer->name }}">
		</div>

		<div class="form-group">
			<label>Avatar</label>
			<input type="file" name="avatar">
		</div>

		<div class="form-group">
			<label>Descripcion</label>
			<textarea class="form-control" rows="5" name="des">{{ $trainer->des }}</textarea>
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form> --}}
@endsection
