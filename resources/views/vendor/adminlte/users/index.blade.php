@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			
				<div class="panel panel-default">

					 <div class="panel panel-heading">Administrar Usuarios
					 	@can('users.create')
					 	
					 	<a href="{{route('users.create') }}" class="btn btn-sm btn-warning pull-right">Agregar Nuevo Usuario</a>
					 	@endcan
					 </div>
					
					<div class="panel-body">
						<table class="table table-striped table-hover table-responsive">
							<thead>
								<tr>
									<th width="10px">ID</th>
									<th>Nombre de usuario:</th>
									<th>Email:</th>
									<th>Fecha de Registro:</th>
									<th colspan="5">Acciones</th>
								</tr>
							</thead>
								<tbody>
								@foreach($users as $user)
								<tr>
									<td>{{ $user->id }}</td>

									<td>{{ $user->name}}</td>

									<td>{{ $user->email }}</td>

									<td>{{ $user->created_at }}</td>


									<td width="10px">

									@can('users.show')

									<a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-info">
										       <i class="glyphicon glyphicon-eye-open"></i></a>

									@endcan
									</td>

								
									<td width="10px">
									@can('users.edit')
									<a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">
										       <i class="glyphicon glyphicon-pencil"></i></a>
									@endcan
									</td>
								

										<td width="10px"> 
										@can('users.destroy')
										{!! Form::open(['route' => ['users.destroy', $user->id],
										'method' => 'DELETE']) !!}

										<button class="btn btn-sm btn-danger">
											<i class="glyphicon glyphicon-remove"></i>
										
										</button>

										{!! Form::close() !!}
										@endcan
									</td>



								</tr>
								@endforeach
							</tbody>
						</table>
						{{ $users->render() }}
					</div>
				</div>
			
		</div>
	</div>
@endsection