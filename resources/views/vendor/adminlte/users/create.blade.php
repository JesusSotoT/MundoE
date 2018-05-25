@extends('adminlte::layouts.app')

@section('htmlheader_title')

@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">Agregar un nuevo Beacon</div>


					<div class="panel-body">

					{!! Form::open(['route' => 'users.store']) !!}

						<div class="form-group">
	{{ Form::label('name', 'Nombre de Usuario:') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	
	{{ Form::label('email', 'Email:') }}
	{{ Form::text('email', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	
	
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>
					{!! Form::close() !!}
						

					</div>					
				</div>
			</div>
		</div>
	</div>
@endsection