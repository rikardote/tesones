@extends('layouts.main')

@section('title', 'NOMINAS')

@section('content')
<a class="noprint btn btn-info pull pull-left" href="{{route('info_nominas.create') }}">Crear nomina</a>
	<table class="table table-striped">
		<thead>
			<th>FECHA DE EMISION</th>
			<th>NOMINA</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($nominas as $nomina)
				<tr>
					<td>{{fecha_dmy($nomina->fecha_emision)}}</td>
					<td>
						{{ $nomina->nomina }}
					</td>
					<td>
       		            <a data-url="{{ route('info_nominas.edit', $nomina->id) }}" class="load-form-modal  panelColorGreen" data-toggle ="modal" data-target='#form-modal'>
			               <span class="fa fa-pencil-square-o fa-2x" aria-hidden='true'></span>
			            </a> 
			            <a href="{{ route('admin.info_nominas.destroy', $nomina->id) }}"><span class="fa fa-trash fa-2x panelColorRed" aria-hidden="true"></span></a>
			         </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection