<div class="col-md-12">

	<div class="form-group">
		{!! Form::label('nomina', 'Nomina') !!}
		{!! Form::text('nomina', null, [
			  'class' => 'form-control'
		]) !!}
	</div>
	<p><small>Ejemplo: ORDINARIA, QNA 01 DEL 2017</small></p>
	<div class="form-group">
		{!! Form::label('fecha_emision', 'Fecha de emision') !!}
		{!! Form::text('fecha_emision', null, [
		'class' => 'form-control',
		'placeholder' => 'Selecciona la fecha', 
		'required',
		'id' => 'fecha_emision'
	]) !!}
	</div>
 	{!! Form::submit('Crear Nomina', ['class' => 'btn btn-success btn-block']) !!}
</div>