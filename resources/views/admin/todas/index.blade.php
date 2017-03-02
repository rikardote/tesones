@extends('layouts.main')

@section('title', 'TESONES')

@section('content')


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
					@if($teson->tipo_personal == 1)
						FUNCIONARIOS
					@else
						OPERATIVOS
					@endif
				</td>
				<td>
					@if($teson->remision_nomina == 1)
						DEBITO
					@endif

					@if($teson->remision_nomina == 2)
							CHEQUES
					@endif

					@if($teson->remision_nomina == 3)
							VALES
					@endif

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