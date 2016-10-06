@extends('layouts.main')

@section('title', 'TESONES')

@section('content')

<table border="0" cellpadding="12" cellspacing="2" style="width:100%;">
	<tbody>
		<tr>
			<td><img alt="" src="fotos/issste.png" style="width: 300px; height: 108px;" /></td>
			<td align='right'>
				<table border="1" style="width:100%;">
					<tr>
						<div align="right">(T-SON 19.1)</div>
						<td align="center" colspan=3>FECHA DE ELABORACION</td>
							<tr>
								<td align="center">DIA: #22#</td>
								<td align="center">MES: #AGOSTO#</td>
								<td align="center">AÑO: #2016#</td>
							</tr>
					</tr>
				</table>
			
			</td>
		</tr>
	</tbody>
</table>
<br>
<br>
<table border="1" class="texto-centrado" style="width:100%";>
	<tr>
		<td>TIPO DE PERSONAL: </td>
		<td >#FUNCIONARIOS#</td>
		<td>FECHA DE EMISION: </td>
		<td >#31 DE JULIO DE 2016#</td>
	</tr>
	<tr>
		<td>TIPO DE NOMINA: </td>
		<td >#ORDINARIA QNA 14/2016#</td>
		<td>CLAVE DE ADSCRIPCION: </td>
		<td >#00077#</td>
	</tr>
	<tr>
		<td>FOLIOS: </td>
		<td >DEL #3826482# AL #386482#</td>
		<td>LUGAR: </td>
		<td >#MANZANA 15 S/N MODULO3 ENTRE RICARDO CASTRO Y FELIPE VILLANUEVA, TIJUANA B.C#</td>
	</tr>
	<tr>
		<td>UNIDAD: </td>
		<td >#E.B.D.I. No 105#</td>
		<td>DEPENDENCIA: </td>
		<td >#I.S.S.S.T.E.#</td>
	</tr>

</table>
<br>
<table border="1" style="width:100%" class="texto-centrado">
	<tr >
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

	<tr>
		<td style="border:0px";>#332618#</td>
		<td style="text-align:left; border:0px;">#HECTOR RICARDO FUENTES ARMENTA#</td>
		<td style="border:0px";>#3826482#</td>
		<td style="border:0px";>$ 4153.00</td>
		<td style="border:0px";>53</td>
		<td style="border:0px";>RENUNCIA</td>

	</tr>
	<tr>
		<td style="border:0px";>#225256#</td>
		<td style="text-align:left; border:0px;">#JOSE PEREZ LOPEZ#</td>
		<td style="border:0px";>#3826486#</td>
		<td style="border:0px";>$ 6143.00</td>
		<td style="border:0px";>53</td>
		<td style="border:0px";>RENUNCIA</td>

	</tr>
</table>

<br>
<table border="1" width="100%">
	<tr>
		<td align="left">OBSERVACIONES: <br>
			######################################### # 3
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
		<td  width="28%" class="protesta">
			"DECLARO BAJO PROTESTA; DECIR LA VERDAD QUE LOS DATOS Y FIRMAS CONTENIDOS EN ESTE FORMATO, SON VERIDICAS Y MANIFESTAMOS TENER CONOCIMIENTO DE LAS SANCIONES QUE SE APLICARAN EN CASO CONTRARIO"
		</td>
		<td align="center">
				TITULAR DEL AREA
			<br><br>
			<u><strong>C.P. RAQUEL DURAN PUENTES</strong></u>
		</td>
		<td align="center">
				PAGADOR HABILITADO
			<br><br>
			<u><strong>C.P. RAQUEL DURAN PUENTES</strong></u>
		</td>
	</tr>
</table>
@endsection