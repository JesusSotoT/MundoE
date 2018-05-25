<div class="form-group">
	{{ Form::label('name', 'Nombre de Usuario:') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	
	{{ Form::label('email', 'Email:') }}
	{{ Form::text('email', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	
	{{ Form::label('created_at', 'Fecha de Registro:') }}
	{{ Form::text('created_at', null, ['class' => 'form-control', 'readonly']) }}
</div>
<div class="form-group">
	
	{{ Form::label('updated_at', 'Ultima vez actualizado:') }}
	{{ Form::text('updated_at', null, ['class' => 'form-control' , 'readonly']) }}
</div>
<div class="form-group">
	
	
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>