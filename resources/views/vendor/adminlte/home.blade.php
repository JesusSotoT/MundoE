@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			
				<div class="panel panel-default">

					 <div class="panel panel-heading">Bienvenido {{ Auth::user()->name }} !     
					 	<ul class="nav">

					 		@can('products.index')
					 	<li class="nav-item">

					 		<a class="nav-link" href="{{ route('products.index') }}">Productos</a>

					 
					 		@endcan

					 		@can('users.index')
						 

					 		<a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>

					
					 	@endcan

					 	@can('roles.index')
	
					 		<a  class="nav-link"href="{{ route('roles.index') }}">Roles</a>
					 	</li>
					 	@endcan
					 </ul>
					 </div>
					
					<div class="panel-body">
						
					</div>
				</div>
			
		</div>
	</div>
@endsection
