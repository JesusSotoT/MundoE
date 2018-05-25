@extends('adminlte::layouts.app')

@section('htmlheader_title')

@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-success">
					<div class="panel-heading">Usuario</div>


					<div class="panel-body">

						<p><strong>Nombre: </strong> {{ $user->name}}</p>
						<p><strong>E-mail: </strong> {{ $user->email}}</p>
						<p><strong>Fecha de Registro : </strong> {{ $user->created_at}}</p>
						

					</div>
					
				</div>
			</div>
		</div>
	</div>
@endsection