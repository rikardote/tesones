<div class="col-md-12">
	<div class="form-group">
			{!! Form::label('nomina_id', 'Nomina') !!}
			{!! Form::select('nomina_id', $nominas, null, [
					'placeholder' => 'Selecciona una nomina.',
					'class' => 'form-control',
					'size' => 6,
					'required'
				]) !!}

	</div>
	<div class="form-group">
		{!! Form::label('remision_nomina', 'CHEQUES O DEBITO') !!}
		{!! Form::select('remision_nomina', ['1' => 'DEBITO', '2' => 'CHEQUES', '3' => 'VALES', '4' => 'PENSIÓN ALIMENTICIA'], null, [
				'placeholder' => 'Selecciona...',
				'class' => 'form-control',
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
			{!! Form::label('folio_inicial', 'Folio Inicial') !!}
			{!! Form::number('folio_inicial', null, [
						'class' => 'form-control',
						'min' => '1',
						'required'
				]) 
			!!}
			
	</div>

	<div class="form-group">
		{!! Form::label('folio_final', 'Folio Final') !!}
		{!! Form::number('folio_final', null, [
				'class' => 'form-control',
				'min' => '1',
				'required'
			]) 
		!!}
	</div>
	


	<div class="form-group">
				{!! Form::label('observaciones', 'Observaciones') !!}
			  {!! Form::text('observaciones', null, [
			    'class' => 'form-control',
			    'placeholder' => 'Observaciones'
			    
			  ]) !!}
				
	</div>
 	{!! Form::submit('Generar Teson', ['class' => 'btn btn-success btn-block']) !!}
</div>