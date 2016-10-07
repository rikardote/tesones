<div class="col-md-6">
	<div class="form-group">
		{!! Form::label('remision_nomina', 'Nomina') !!}
		{!! Form::select('remision_nomina', ['1' => 'DEBITO', '2' => 'CHEQUES'], null, [
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
			{!! Form::text('folio_inicial', null, [
						'class' => 'form-control',
						'required'
				]) 
			!!}
			
	</div>
</div>
<div class="col-md-6">
	<div class="form-group">
			{!! Form::label('tipo_nomina', 'Tipo de nomina') !!}
			{!! Form::select('tipo_nomina', ['1' => 'ORDINARIA', '2' => 'EXTRAORDINARIA'], null, [
					'placeholder' => 'Selecciona...',
					'class' => 'form-control',
					'required'
				]) !!}

		</div>
	<div class="form-group">
			{!! Form::label('fecha_emision', 'Fecha de emision') !!}
		  {!! Form::text('fecha_emision', null, [
		    'class' => 'form-control',
		    'placeholder' => 'Fecha de Emision', 
		    'required',
		    'id' => 'datepicker'
		  ]) !!}
			
	</div>
	<div class="form-group">
		{!! Form::label('folio_final', 'Folio Final') !!}
		{!! Form::text('folio_final', null, [
				'class' => 'form-control',
				'required'
			]) 
		!!}
	</div>
	
</div>
<div class="col-md-12">
	<div class="form-group">
				{!! Form::label('observaciones', 'Observaciones') !!}
			  {!! Form::text('observaciones', null, [
			    'class' => 'form-control',
			    'placeholder' => 'Observaciones'
			    
			  ]) !!}
				
	</div>

</div>