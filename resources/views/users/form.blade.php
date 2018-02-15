<div class="col-md-12">
	<div class="form-group">
		{!! Form::label('adscripcion', 'Adscripcion') !!}
		{!! Form::text('adscripcion',null, [
						'class' => 'form-control'
				]) 
		!!}

	</div>
	<div class="form-group">
		{!! Form::label('unidad', 'Unidad') !!}
		{!! Form::text('unidad', null, [
						'class' => 'form-control'
				]) 
		!!}

	</div>
	<div class="form-group">
		{!! Form::label('lugar', 'Lugar') !!}
		{!! Form::text('lugar', null, [
						'class' => 'form-control'
				]) 
		!!}

	</div>
	<div class="form-group">
		{!! Form::label('titular_area', 'Titular del area') !!}
		{!! Form::text('titular_area', null, [
						'class' => 'form-control'
				]) 
		!!}

	</div>
	<div class="form-group">
		{!! Form::label('pagador_habilitado', 'Pagador Habilitado') !!}
		{!! Form::text('pagador_habilitado', null, [
						'class' => 'form-control'
				]) 
		!!}

	</div>
	
</div>