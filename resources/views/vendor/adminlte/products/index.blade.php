@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			
				<div class="panel panel-default">

					 <div class="panel panel-heading">Administra los Beacons
					 	@can('products.create')
					 	
					 	<a href="{{route('products.create') }}" class="btn btn-sm btn-warning pull-right">Agregar Nuevo Beacon</a>
					 	@endcan
					 </div>
					
					<div class="panel-body">
						<table class="table table-striped table-hover table-responsive">
							<thead>
								<tr>
									<th width="10px">ID</th>
									<th>Nombre De Identificacion</th>
									<th>ID de Fabrica</th>
									<th>UUID</th>
									<th colspan="">Acciones</th>
								</tr>
							</thead>
								<tbody>
								@foreach($products as $product)
								<tr>
									<td>{{ $product->id }}</td>

									<td>{{ $product->description}}</td>

									<td>{{ $product->ID_factory }}</td>

									<td>{{ $product->uudid }}</td>


									<td>

									@can('products.show')

									<a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info">
										       <i class="glyphicon glyphicon-eye-open"></i> Ver</a>

									@endcan
								

								
									
									@can('products.edit')
									<a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">
										       <i class="glyphicon glyphicon-pencil"></i> Editar</a>
									@endcan

							
										@can('products.destroy')
										{!! Form::open(['route' => ['products.destroy', $product->id],
										'method' => 'DELETE']) !!}

										<button class="btn btn-sm btn-danger">
											<i class="glyphicon glyphicon-remove"></i>
											Eliminar
										</button>

										{!! Form::close() !!}
										@endcan
									</td>



								</tr>
								@endforeach
							</tbody>
						</table>
						{{ $products->render() }}
					</div>
				</div>
			
		</div>
	</div>
@endsection