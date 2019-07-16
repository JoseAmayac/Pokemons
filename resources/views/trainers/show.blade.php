@extends('layouts.app')

@section('title','Trainer')

@section('content')
	@include('common.success')
	<img style="height: 200px; width:200px; background-color:#EFEFEF; margin:20px; " src="/images/{{$trainer->avatar}}" class="card-img-top rounded-circle mx-auto d-block">
	<div class="text-center">
		<h5 class="card-title">{{$trainer->name}}</h5>
		<p class="card-text">{{$trainer->descripcion}}</p>
		<a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>

		<form method="POST" action="/trainers/{{$trainer->slug}}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <div class="form-group">
              <input type="submit" style="margin-top: 10px;" class="btn btn-danger" value="Eliminar">
            </div>
          </form>
	</div>
	<modal-button></modal-button>
	<create-form-pokemons></create-form-pokemons>
	<list-of-pokemons></list-of-pokemons>
@endsection