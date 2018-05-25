@extends('adminlte::layouts.app')

@section('htmlheader_title')

@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">Informacion de Beacon</div>


					<div class="panel-body">

					{!! Form::model($product, ['route' => ['products.update', $product->id],
					'method' => 'PUT']) !!}

						@include('adminlte::products.partials.form')



					{!! Form::close() !!}
						

					</div>
			
					
				</div>
			</div>
		</div>
	</div>
@endsection