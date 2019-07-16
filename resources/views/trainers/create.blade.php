@extends('layouts.app')

@section('title','trainers create')


@section('content')
	@include('common.errors')
	<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label><strong>Nombre</strong></label>
			<input type="text" name="name" class="form-control">
		</div>
		<div class="form-group">
			<label><strong>Slug</strong></label>
			<input type="text" name="slug" class="form-control">
		</div>
		<div class="form-group">
			<label><strong>Descripción</strong></label>
			<textarea name="descripcion" rows="6" cols="40" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label><strong>Avatar</strong></label>
			<br>
			<input type="file" name="avatar">
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
@endsection 
