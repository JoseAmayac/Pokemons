<div class="form-group">
	<label><strong>Nombre</strong></label>
	<input type="text" name="name" value="{{$trainer->name}}" class="form-control">
</div>
<div class="form-group">
	<label><strong>Slug</strong></label>
	<input type="text" name="slug" value="{{$trainer->slug}}" class="form-control">
</div>
<div class="form-group">
	<label><strong>Descripción</strong></label>
	<textarea name="descripcion" rows="6" cols="40" class="form-control">{{$trainer->descripcion}}</textarea>
</div>
<div class="form-group">
	<label><strong>Avatar</strong></label>
	<br>
	<input type="file" name="avatar" >
</div>