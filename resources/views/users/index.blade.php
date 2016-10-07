@extends('layouts.main')

@section('title', 'CREAR TESON')

@section('content')

	
		<div class="panel panel-primary">
		  <div class="panel-heading">Modificar Informacion del Usuario</div>
		<div class="panel-body">
			{!! Form::model($user, ['route' => ['usuarios.update', $user->id], 'method' => 'PATCH']) !!}
				@include('users.form')
  	  {!! Form::submit('Actualizar Informacion', ['class' => 'btn btn-success btn-block']) !!}
	    {!! Form::close() !!}
		</div>


@endsection