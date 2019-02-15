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