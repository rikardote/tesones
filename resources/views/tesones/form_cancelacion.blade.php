<div class="col-md-12">
	<div class="form-group">
		{!! Form::label('num_empleado', 'Numero de empleado') !!}
		{!! Form::text('num_empleado', null, [
				'placeholder' => 'Ingresa numero de empleado',
				'class' => 'form-control',
				'required'
			]) !!}

	</div>
	<div class="form-group">
		{!! Form::label('nombre', 'Nombre') !!}
		{!! Form::text('nombre', null, [
				'placeholder' => 'Ingresa el nombre',
				'class' => 'form-control',
				'required'
			]) !!}

	</div>
	<div class="form-group">
		{!! Form::label('numero_cheque', 'Numero de Cheque / Recibo') !!}
		{!! Form::text('numero_cheque', null, [
				'placeholder' => 'Ingresa numero de Cheque / Recibo',
				'class' => 'form-control',
				'min' => '1',
				'onkeypress' => 'return isNumberKey(event)',
				'required'
			]) !!}

	</div>
	<div class="form-group">
		{!! Form::label('importe', 'Importe') !!}
		{!! Form::text('importe', null, [
				'placeholder' => 'Ingresa el importe',
				'class' => 'form-control',
				'min' => '1',
				'onkeypress' => 'return isNumberKeyAndDot(event)',
				'required'
			]) !!}

	</div>
	<div class="form-group">
		{!! Form::label('clave', 'Clave') !!}
		{!! Form::select('clave', [ '50' => '50 - CAMBIO DE TIPO DE NOMBRAMIENTO O CON CONTRATACION, CAMBIO DE PLAZA', 
									'51' => '51 - TERMINO DE CONTRATACION, COMISION O PROVISIONALIDAD',
									'52' => '52 - DEFUNCION',
									'53' => '53 - RENUNCIA',
									'54' => '54 - LICENCIA SIN SUELDO',
									'55' => '55 - DUPLICIDAD DE NUMERO DE EMPLEADO',
									'56' => '56 - EXCESO DE INCAPACIDADES',
									'57' => '57 - RENUNCIA POR PENSION O JUBILACION (LICENCIA MEDICA DEFINITIVA)',
									'58' => '58 - POR NO TOMAR POSESION DEL CARGO',
									'59' => '59 - CESE',
									'60' => '60 - POR NO PRESENTARSE A COBRAR A TIEMPO',
									'61' => '61 - PAGO IMPROCEDENTE PARCIAL, TERMINO VIGENCIA, TRAMITE JURIDICO',
									'62' => '62 - ERROR DE IMPRESION',
									'63' => '63 - CANCELADO INDEBIDAMENTE',
									'64' => '64 - NO LABORAR EN LA UNIDAD',
									'65' => '65 - TERMINO DE BECA (PASANTES DE SERVICIO SOCIAL, INTERINOS DE PREGRADO)',
									'66' => '66 - CAMBIO DE RESIDENCIA (MEDICOS RESIDENTES)',
									'67' => '67 - TERMINO DE VIGENCIA',
									'68' => '68 - POR ROBO O EXTRAVIO',
									'69' => '69 - DETERIORO O MALTRATO',
									'70' => '70 - AJUSTE DE SUELDO',
									'80' => '80 - CHEQUE DESTRUIDO',
									'81' => '81 - EXTRAVIO',
									],null, [
				'placeholder' => 'Selecciona...',
				'class' => 'form-control',
				'required'
			]) !!}

	</div>
</div>

