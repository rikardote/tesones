@extends('layouts.main')

@section('title', 'Usuarios')

@section('content')

	
		<div class="panel panel-primary">
			<div class="panel-heading">Modificar Usuarios</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<th>Nombre</th>
							<th>E-mail</th>
							<th>Adscripción</th>
							<th>Acciones</th>
						</thead>
						<tbody>
							@foreach($users as $user)
							<tr>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->adscripcion }}</td>
								<td>
				       		        <a href="{{route('usuarios.edit', $user->id) }}"><span class="fa fa-pencil-square-o fa-2x" aria-hidden='true'></span>
							        </a>
							        <a href="{{route('usuarios.edit.password', $user->id) }}"><span class="fa fa fa-key fa-2x" aria-hidden='true'></span>
							        </a>  
							        <a href="{{ route('usuario.destroy', $user->id) }}" onclick="return confirm('¿Seguro de borrar este Usuario?');"><span class="fa fa-trash fa-2x panelColorRed" aria-hidden="true"></span></a>
							    </td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
		</div>


@endsection