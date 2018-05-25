<div class="form-group">
	{{ Form::label('description', 'Nombre del Beacon:') }}
	{{ Form::text('description', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	
	{{ Form::label('ID_factory', 'Id de Fabrica del Beacon:') }}
	{{ Form::text('ID_factory', null, ['class' => 'form-control' , 'readonly']) }}
</div>
<div class="form-group">
	
	{{ Form::label('s/n', 'Numero de Serie:') }}
	{{ Form::text('s/n', null, ['class' => 'form-control', 'readonly']) }}
</div>
<div class="form-group">
	
	{{ Form::label('FCC_ID', 'FCC_ID:') }}
	{{ Form::text('FCC_ID', null, ['class' => 'form-control' , 'readonly']) }}
</div>
<div class="form-group">
	
	{{ Form::label('created_at', 'Fecha de Registro:') }}
	{{ Form::text('created_at', null, ['class' => 'form-control', 'readonly']) }}
</div>
<div class="form-group">
	
	
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>