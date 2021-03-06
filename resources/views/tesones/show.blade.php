@extends('layouts.main')

@section('title', 'TESONES')

@section('content')
	
<div class="noprint social">
		<ul>
			<li><a href="{{route('cancelar.teson', $teson->id) }}" class="icon-pdf"><i class="fa fa-plus fa-1x "> Agregar Cancelaciones</i></a></li>
			<br>
			<li><a href="{{route('tesones.edit', $teson->id) }}" class="icon-pdf"><i class="fa fa-pencil-square-o fa-1x "> Modificar TSON</i></a></li>
			<br>
			<li><a href="{{route('print_teson', $teson->id) }}" class="icon-pdf"><i class="fa fa-file-pdf-o fa-1x "> Generar PDF</i></a></li>
		</ul>
</div>
<table border="0" cellpadding="12" cellspacing="2" style="width:100%;"  STYLE="table-layout:fixed;">
	<tbody>
		<tr>
			<td><img alt="" src="../fotos/60issste.png" style="width: 300px; height: 65px;" /></td>
			<td align='right'>
				<table border="1" style="width:100%;">
					<tr>
						<div align="right">(T-SON 19.1)</div>
						<td align="center" colspan=3>FECHA DE ELABORACIÓN</td>
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
					DEBITO BBVA
			@endif

			@if($teson->remision_nomina == 2)
					CHEQUES
			@endif

			@if($teson->remision_nomina == 3)
				TARJETAS DE VALES
			@endif
			@if($teson->remision_nomina == 4)
				PENSIÓN ALIMENTICIA&nbsp;&nbsp;(CHEQUES)
			@endif
			@if($teson->remision_nomina == 5)
				F O N A C&nbsp;&nbsp;( D I E )
			@endif
			@if($teson->remision_nomina == 6)
				F O N A C&nbsp;&nbsp;( D E B I T O )
			@endif
			@if($teson->remision_nomina == 7)
				DEBITO SPEI
			@endif
</strong></p>
<table border="1" class="texto-centrado" style="width:100%";>
	<tr>
		<td>TIPO DE PERSONAL: </td>
		<td>
			{{ getFunOp($teson->tipo_personal) }}
		</td>
		<td>FECHA DE EMISIÓN: </td>
		<td>
			{{getDay($teson->nomina->fecha_emision)}} DE {{getMonth($teson->nomina->fecha_emision)}} DE {{getYear($teson->nomina->fecha_emision)}}
		</td>
	</tr>
	<tr>
		<td>TIPO DE NOMINA:</td>
		<td>
			{{ $teson->nomina->nomina }}
		</td>
		<td>CLAVE DE ADSCRIPCIÓN:</td>
		<td>{{$user->adscripcion}}</td>
	</tr>
	<tr>
		<td>FOLIOS:</td>
		@if(in_array($teson->remision_nomina, [1,2,4,7]))
			<td>DEL {{$teson->folio_inicial}} AL {{$teson->folio_final}}</td>
		@else
			<td></td>
		@endif
		<td>LUGAR:</td>
		<td>{{$user->lugar}}</td>
	</tr>
	<tr>
		<td>UNIDAD:</td>
		<td>{{$user->unidad}}</td>
		<td>DEPENDENCIA:</td>
		<td>DELEGACIÓN ESTATAL B.C.</td>
	</tr>

</table>
<br>
<table border="1" style="width:100%" class="texto-centrado">
	<tr>
		<td rowspan="2">NÚMERO DE<br>EMPLEADO</td>
		<td rowspan="2">NOMBRE</td>

		@if($teson->remision_nomina == 1)
			<td rowspan="2">NÚMERO DE RECIBO</td>
		@else
			<td rowspan="2">NÚMERO DE CHEQUE</td>
		@endif
		
		<td rowspan="2">IMPORTE</td>
		<td colspan=2 > MOTIVO DE CANCELACIÓN </td>
	</tr>
	<tr>
		<td >CLAVE</td>
		<td >DESCRIPCIÓN</td>
	</tr>
	@foreach($cancelaciones as $cancelacion)
		<tr>
			<td style="border:0px";>{{$cancelacion->num_empleado}}</td>
			<td style="text-align:left; border:0px;"><p class="indent">{{$cancelacion->nombre}}</p></td>
			<td style="border:0px";>{{$cancelacion->numero_cheque}}</td>
			<td style="border:0px";>$ {{number_format($cancelacion->importe,2)}}</td>
			<td style="border:0px";>{{$cancelacion->clave}}</td>
			<td style="border:0px";>{{getCancelacion($cancelacion->clave)}}</td>

		</tr>
	@endforeach
	@for($i=$cancelaciones->count(); $i<=15; $i++)
		<tr><td style="border:0px"; colspan="6">&nbsp;</td></tr>
		<!-- @if	($i==5 && $cancelaciones->count()==null) -->
			<tr><td style="border:0px;font-size:20px;text-shadow: 3px 2px #808080;" colspan="6">&nbsp;PAGADA EN SU TOTALIDAD</td></tr>
			{{--*/ $i=6 /*--}}
		<!-- @endif -->
	@endfor
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
			<br><br><br>
			<strong><p style="text-decoration: overline;">{{$user->titular_area}}</p></strong>
		</td>
		<td align="center">
				PAGADOR HABILITADO
			<br><br><br>
			<strong><p style="text-decoration: overline;">{{$user->pagador_habilitado}}</p></strong>
		</td>
	</tr>
</table>


@endsection
