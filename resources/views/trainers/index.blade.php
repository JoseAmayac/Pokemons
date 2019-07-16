@extends('layouts.app')

@section('title','trainers')

@section('content')
	@include('common.success')
    <div class="row text-center">
		@foreach($trainers as $trainer)
				<div class="col-sm">
					<div class="card" style="width: 18rem; margin-top: 70px;">
						<img style="height: 100px; width:100px; background-color:#EFEFEF; margin:20px; " src="images/{{$trainer->avatar}}" class="card-img-top rounded-circle mx-auto d-block">
					    <div class="card-body">
					    	<h5 class="card-title">{{$trainer->name}}</h5>
					    	<p class="card-text">{{$trainer->descripcion}}</p>
					    	<a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver más...</a>
					  	</div>
				    </div>
				</div>
		@endforeach
	</div>
@endsection