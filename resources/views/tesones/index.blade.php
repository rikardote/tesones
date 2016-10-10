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

	</thead>
	<tbody>
		@foreach($tesones as $teson)
			<tr>
				<td><a href="{{route('tesones.show',$teson->id)}}">{{fecha_dmy($teson->fecha_emision)}}</a></td>
				<td>
					@if($teson->tipo_nomina == 1)
						ORDINARIA
					@else
						EXTRAORDINARIA
					@endif
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
					@else
						CHEQUES
					@endif 
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
{!! $tesones->render() !!}
@endsection