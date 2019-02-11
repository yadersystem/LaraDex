@extends('layouts.app') <!--Hereda todo de la vista app.blade-->

@section('title', 'Trainer')<!--Le coloca nombre al modulo-->

@section('content') <!--invoca el contenido de app.blade-->
	<img style="height:100px; width:100px; background-color: #efefef; margin: 20px;"  class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">

	<div class="text-center">
		<h5 class="card-title">{{$trainer->name}}</h5>
		<h1>{{ $trainer->slug }}</h1>
		<p>{{ $trainer->des }}</p>
	</div>
	
@endsection