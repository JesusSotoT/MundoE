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

					{!! Form::open(['route' => 'products.store']) !!}

	<div class="form-group">
	{{ Form::label('description', 'Nombre del Beacon:') }}
	{{ Form::text('description', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	
	{{ Form::label('ID_factory', 'Id de Fabrica del Beacon:') }}
	{{ Form::text('ID_factory', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	
	{{ Form::label('s/n', 'Numero de Serie:') }}
	{{ Form::text('s/n', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	
	{{ Form::label('FCC_ID', 'FCC_ID:') }}
	{{ Form::text('FCC_ID', null, ['class' => 'form-control']) }}
</div>
	
	
	{{ Form::submit('Guardar', null, ['class' => 'btn btn-sm btn-primary']) }}
</div>

					{!! Form::close() !!}
						

					</div>					
				</div>
			</div>
		</div>
	</div>
@endsection