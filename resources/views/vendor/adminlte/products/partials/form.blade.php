<div class="form-group">
	{{ Form::label('id', 'Id asignado por el sistema') }}
	{{ Form::text('id', null, ['class' => 'form-control']) }}

	{{ Form::label('description', 'Nombre del Beacon') }}
	{{ Form::text('description', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	
	{{ Form::label('ID_factory', 'Id de Fabrica del Beacon') }}
	{{ Form::text('ID_factory', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	
	
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-success']) }}
</div>