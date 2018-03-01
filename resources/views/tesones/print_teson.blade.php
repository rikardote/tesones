<style>
.table-logo td{
    border: 1px solid black;
    font-size: 12px;

}
table{
	border-collapse:inherit;
	font-size: 12px;
}
.no-border tr{
	 border-left: none;
}
</style>

<table width="100%">
	<tbody>
		<tr>
			<td><img alt="" src="../fotos/issste.png" style="width: 300px; height: 108px;" /></td>
			<td align='right'>
				<table width="100%" class="table-logo">
					<tr>
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
<table cellpadding="1" cellspacing="1" width="100%" class="texto-centrado table-logo">
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
<table border="0" width="100%" >
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
		<tr class="no-border">
			<td>{{$cancelacion->num_empleado}}</td>
			<td><p class="indent">{{$cancelacion->nombre}}</p></td>
			<td>{{$cancelacion->numero_cheque}}</td>
			<td>$ {{$cancelacion->importe}}</td>
			<td>{{$cancelacion->clave}}</td>
			<td></td>

		</tr>
	@endforeach
	@for($i=$cancelaciones->count(); $i<=10; $i++)
		<tr><td  colspan="6">&nbsp;</td></tr>
	@endfor
</table>


<br>
<table width="100%"  class="table-logo">
	<tr>
		<td align="left">OBSERVACIONES: <br>
			<strong>{{$teson->observaciones}}</strong>
		</td>
	</tr>
</table>

<br>

<table width="100%">
	<tr>
		<td style="font-size: 10px"><strong>NOTA:</strong></td>
		<td align="center">ATENTAMENTE</td>
		<td align="center">ATENTAMENTE</td>
	</tr>
	<tr>
		<td  style="font-size: 9px" width="35%" class="protesta">
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