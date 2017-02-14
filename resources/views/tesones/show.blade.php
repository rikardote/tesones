@extends('layouts.main')

@section('title', 'TESONES')

@section('content')
	<div class="social">
     	<ul>
            <li><a href="{{route('print_teson', [$teson->id])}}" class="icon-pdf"><i class="fa fa-file-pdf-o fa-2x "></i></a></li>
        </ul>
    </div>

<table border="0" cellpadding="12" cellspacing="2" style="width:100%;"  STYLE="table-layout:fixed;">
	<tbody>
		<tr>
			<td><img alt="" src="../fotos/issste.png" style="width: 400px; height: 108px;" /></td>
			<td align='right'>
				<table border="1" style="width:100%;">
					<tr>
						<div align="right">(T-SON 19.1)</div>
						<td align="center" colspan=3>FECHA DE ELABORACION</td>
							<tr>
								<td align="center">DIA: {{getDay($teson->fecha_elaboracion)}}</td>
								<td align="center">MES: {{getMonth($teson->elaboracion)}}</td>
								<td align="center">AÑO: {{getYear($teson->fecha_elaboracion)}}</td>
							</tr>
					</tr>
				</table>
			
			</td>
		</tr>
	</tbody>
</table>
<br>

<p><strong>REMISION DE LA NOMINA DE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
			@if($teson->remision_nomina == 1)
				DEBITO
			@else
				CHEQUES
			@endif  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     BANCOMER</strong></p>
<table border="1" class="texto-centrado" style="width:100%";>
	<tr>
		<td>TIPO DE PERSONAL: </td>
		<td>
			@if($teson->tipo_personal == 1)
				FUNCIONARIOS
			@else
				OPERATIVOS
			@endif
		</td>
		<td>FECHA DE EMISION: </td>
		<td>
			{{getDay($teson->fecha_emision)}} DE {{getMonth($teson->fecha_emision)}} DE {{getYear($teson->fecha_emision)}}
		</td>
	</tr>
	<tr>
		<td>TIPO DE NOMINA: </td>
		<td>
			@if($teson->tipo_nomina == 1)
				ORDINARIA
			@else
				EXTRAORDINARIA
			@endif
		</td>
		<td>CLAVE DE ADSCRIPCION: </td>
		<td>{{$user->adscripcion}}</td>
	</tr>
	<tr>
		<td>FOLIOS: </td>
		<td>DEL {{$teson->folio_inicial}} AL {{$teson->folio_final}}</td>
		<td>LUGAR: </td>
		<td>{{$user->lugar}}</td>
	</tr>
	<tr>
		<td>UNIDAD: </td>
		<td>{{$user->unidad}}</td>
		<td>DEPENDENCIA: </td>
		<td>I.S.S.S.T.E.</td>
	</tr>

</table>
<br>
<table border="1" style="width:100%" class="texto-centrado">
	<tr>
		<td rowspan="2">NUMERO DE EMPLEADO</td>
		<td rowspan="2">NOMBRE DEL EMPLEADO</td>
		<td rowspan="2">NUMERO DE CHEQUE</td>
		<td rowspan="2">IMPORTE</td>
		<td colspan=2 > MOTIVO DE CANCELACION </td>
	</tr>
	<tr>
		<td >CLAVE</td>
		<td >DESCRIPCION</td>
	</tr>
	@foreach($cancelaciones as $cancelacion)
		<tr>
			<td style="border:0px";>{{$cancelacion->num_empleado}}</td>
			<td style="text-align:left; border:0px;"><p class="indent">{{$cancelacion->nombre}}</p></td>
			<td style="border:0px";>{{$cancelacion->numero_cheque}}</td>
			<td style="border:0px";>$ {{$cancelacion->importe}}</td>
			<td style="border:0px";>{{$cancelacion->clave}}</td>
			<td style="border:0px";></td>

		</tr>
	@endforeach
</table>

<br>
<table border="1" width="100%">
	<tr>
		<td align="left">OBSERVACIONES: <br>
			<strong>{{$teson->observaciones}}</strong>
		</td>
	</tr>
</table>

<br>

<table width="100%">
	<tr>
		<td style="font-size: 9px"><strong>NOTA:</strong></td>
		<td align="center">ATENTAMENTE</td>
		<td align="center">ATENTAMENTE</td>
	</tr>
	<tr>
		<td  width="35%" class="protesta">
			"DECLARO BAJO PROTESTA; DECIR LA VERDAD QUE LOS DATOS Y FIRMAS CONTENIDOS EN ESTE FORMATO, SON VERIDICAS Y MANIFESTAMOS TENER CONOCIMIENTO DE LAS SANCIONES QUE SE APLICARAN EN CASO CONTRARIO"
		</td>
		<td align="center">
				TITULAR DEL AREA
			<br><br>
			<u><strong>{{$user->titular_area}}</strong></u>
		</td>
		<td align="center">
				PAGADOR HABILITADO
			<br><br>
			<u><strong>{{$user->pagador_habilitado}}</strong></u>
		</td>
	</tr>
</table>
<hr>

<a class="btn btn-info pull pull-left" href="{{route('cancelar.teson', $teson->id) }}">Agregar Cancelaciones</a>
<a class="btn btn-info pull pull-right" href="{{route('tesones.edit', $teson->id) }}">Modificar Teson</a>

@endsection