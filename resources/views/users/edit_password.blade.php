@extends('layouts.main')

@section('title', 'Editar Usuario')

@section('content')

	
		<div class="panel panel-primary">
		  <div class="panel-heading">Modificar Informacion del Usuario</div>
		<div class="panel-body">
			 {!! Form::model($user, ['route' => ['usuarios.update.password', $user->id], 'method' => 'PATCH']) !!}
				<div class="col-md-12">
					<div class="form-group">
						{!! Form::label('password', 'Nueva contraseña') !!}
						{!! Form::password('password',null, [
										'class' => 'form-control'
								]) 
						!!}

				</div>
		</div>
  	  		 {!! Form::submit('Actualizar Informacion', ['class' => 'btn btn-success btn-block']) !!}
	   		 {!! Form::close() !!}
		</div>


@endsection

