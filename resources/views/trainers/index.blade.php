@extends('layouts.app') <!--Hereda todo de la vista app.blade-->

@section('title', 'Trainers')<!--Le coloca nombre al modulo-->

@section('content') <!--invoca el contenido de app.blade-->
	<div class="row">
		@foreach($trainers as $trainer)
		<div class="col-sm">
			<div class="card text-center" style="width: 18rem; margin-top: 50px">
			  <img style="height:100px; width:100px; background-color: #efefef; margin: 20px;"  class="card-img-top rounded-circle mx-auto d-block" src="images/{{$trainer->avatar}}" alt="">
			  <div class="card-body">
			    <h5 class="card-title">{{ $trainer->name }}</h5>
			    <p class="card-text">{{ $trainer->des }}</p>
			    <!--a href="/trainers/{{-- $trainer->id --}}" class="btn btn-primary">Ver mas ...</a-->
			    <a href="/trainers/{{ $trainer->slug }}" class="btn btn-primary">Ver mas ...</a>
			  </div>
			</div>
		</div>
		@endforeach
	</div>		
	
@endsection