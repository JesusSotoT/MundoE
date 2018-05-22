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
									<th>Nombre</th>
									<th colspan="3">&nbsp;</th>
								</tr>
							</thead>
								<tbody>
								@foreach($products as $product)
								<tr>
									<td>{{ $product->id }}</td>
									<td>{{ $product->name }}</td>
									<td>

									@can('products.show')

									<a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>

									@endcan

									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						
					</div>
				</div>
			
		</div>
	</div>
@endsection