<div class="col-md-12">
	<div class="form-group">
			{!! Form::label('nomina_id', 'Nomina') !!}
			{!! Form::select('nomina_id', $nominas, null, [
					'class' => 'form-control',
					'size' => 6,
					'required'
				]) !!}

	</div>

	<div class="form-group">
		{!! Form::label('tipo_personal', 'Tipo de personal') !!}
		{!! Form::select('tipo_personal', ['1' => 'FUNCIONARIOS', '2' => 'OPERATIVOS'], null, [
				'placeholder' => 'Selecciona tipo de pesonal...',
				'class' => 'form-control',
				'required'
			]) !!}
		
	</div>

	<div class="form-group">
		{!! Form::label('remision_nomina', 'CHEQUES O DEBITO') !!}
		{!! Form::select('remision_nomina', ['1' => 'DEBITO', '2' => 'CHEQUES', '3' => 'VALES', '4' => 'PENSIÓN ALIMENTICIA'], null, [
				'placeholder' => 'Selecciona...',
				'class' => 'form-control',
				'v-model' => 'v_tipo_pago',
				'required'
			]) !!}

	</div>

	<div class="form-group">
			{!! Form::label('folio_inicial', 'Folio Inicial') !!}
			{!! Form::number('folio_inicial', null, [
						'class' => 'form-control',
						'min' => '1',
						'v-model' => 'folio1',
						'required',
				]) 
			!!}
	</div>
	

	<div class="form-group">
		{!! Form::label('folio_final', 'Folio Final') !!}
		{!! Form::number('folio_final', null, [
				'class' => 'form-control',
				'v-model' => 'folio2',
				'min' => '1',
				'required',
			]) 
		!!}
	</div>
	<h2  class="label label-danger">@{{checkFolio}}</h2>

	<div class="form-group">
				{!! Form::label('observaciones', 'Observaciones') !!}
			  {!! Form::text('observaciones', null, [
			    'class' => 'form-control',
			    'placeholder' => 'Observaciones'
			    
			  ]) !!}
				
	</div>
 	{!! Form::submit('Generar Teson', ['id' => 'boton', 'class' => 'btn btn-success btn-block','disabled' => 'disabled']) !!}
</div>