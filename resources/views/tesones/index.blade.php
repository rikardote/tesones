@extends('layouts.main')

@section('title', 'TESONES')

@section('content')
<h4><strong>{{$user->adscripcion}} - {{$user->unidad}}</strong></h4>

<table class="table table-striped">
	<thead>
		<th>FECHA DE EMISION</th>
		<th>TIPO DE NOMINA</th>
		<th>TIPO DE PERSONAL</th>
		<th>TIPO DE PAGO</th>
		<th>ACCIONES</th>

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
				<td>
       		        <a href="{{route('tesones.edit', $teson->id) }}"><span class="fa fa-pencil-square-o fa-2x" aria-hidden='true'></span>
			        </a> 
			        <a href="{{ route('admin.tesones.destroy', $teson->id) }}" onclick="return confirm('¿Seguro de borrar este Teson?');"><span class="fa fa-trash fa-2x panelColorRed" aria-hidden="true"></span></a>
			    </td>
			</tr>
		@endforeach
	</tbody>
</table>

@endsection