@extends('layouts.main')

@section('title', 'Todos Tesones Por Usuario')

@section('content')
<h4><strong>{{$user->adscripcion}} - {{$user->unidad}}</strong></h4>
<table class="table table-striped">
	<thead>
		<th>FECHA DE EMISION</th>
		<th>TIPO DE NOMINA</th>
		<th>TIPO DE PERSONAL</th>
		<th>TIPO DE PAGO</th>
	</thead>
	<tbody>
		@foreach($tesones as $teson)
			<tr>
				<td><a href="{{route('tesones.show',$teson->id)}}">{{fecha_dmy($teson->nomina->fecha_emision)}}</a></td>
				<td>
					{{ $teson->nomina->nomina }}
				</td>
				<td>
					{{ getFunOp($teson->tipo_personal) }}
				</td>
				<td>
					{{ getRemisionNomina($teson->remision_nomina) }}
				</td>
				
			</tr>
		@endforeach
	</tbody>
</table>


@endsection