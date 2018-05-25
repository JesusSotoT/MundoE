@extends('adminlte::layouts.app')

@section('htmlheader_title')

@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">Informacion de Usuario</div>


					<div class="panel-body">

					{!! Form::model($user, ['route' => ['users.update', $user->id],
					'method' => 'PUT']) !!}

						@include('adminlte::users.partials.form')


					{!! Form::close() !!}
						

					</div>
			
					
				</div>
			</div>
		</div>
	</div>
@endsection