@extends('adminlte::layouts.app')

@section('htmlheader_title')

@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">Producto {{ $product->id }} - {{ $product->description }}</div>


					<div class="panel-body">

						<p><strong>Nombre: </strong> {{ $product->description}}</p>
						<p><strong>ID de fabrica: </strong> {{ $product->ID_factory}}</p>
						<p><strong>UUID: </strong> {{ $product->uudid}}</p>
						<p><strong>FCC_ID</strong> {{ $product->FCC_ID}}</p>

					</div>
					
				</div>
			</div>
		</div>
	</div>
@endsection