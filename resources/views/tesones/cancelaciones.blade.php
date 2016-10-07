@extends('layouts.main')

@section('title', 'Capturar Cancelaciones')

@section('content')

	<div class="panel panel-primary">
		  <div class="panel-heading">Modificar Informacion del Usuario</div>
		<div class="panel-body">
			{!! Form::open(['route' => ['cancelar.teson.store', $teson->id], 'method' => 'POST']) !!}
				@include('tesones.form_cancelacion')
			<table class="table table-hover">
				<thead>
					<th>Numero de Empleado</th>
					<th>Nombre</th>
					<th>Num Cheque</th>
					<th>Importe</th>
					<th>Clave</th>
				</thead>
				<tbody>
					@foreach($cancelaciones as $cancelacion)
						<tr>
							<td>{{$cancelacion->num_empleado}}</td> 
							<td>{{$cancelacion->nombre}}</td> 
							<td>{{$cancelacion->numero_cheque}}</td>
							<td>$ {{$cancelacion->importe}}</td>
							<td>{{$cancelacion->clave}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>  	  
  	  {!! Form::submit('Agregar Cancelacion', ['class' => 'btn btn-success btn-block']) !!}
	    {!! Form::close() !!}


		</div>
	
	</div>
<a href="/tesones/{{$teson->id}}">Regresar</a>

@endsection