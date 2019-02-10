@extends('layouts.app') <!--Hereda todo de la vista app.blade-->

@section('title', 'Trainers')<!--Le coloca nombre al modulo-->

@section('content') <!--invoca el contenido de app.blade-->
	<div class="row">
		@foreach($trainers as $trainer)
		<div class="col-sm">
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="images/{{$trainer->avatar}}" alt="">
			  <div class="card-body">
			    <h5 class="card-title">{{ $trainer->name }}</h5>
			    <p class="card-text">{{ $trainer->des }}</p>
			    <a href="#" class="btn btn-primary">Ver Entrenador</a>
			  </div>
			</div>
		</div>
		@endforeach
	</div>		
	
@endsection