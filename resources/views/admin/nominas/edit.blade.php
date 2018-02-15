@extends('layouts.main')

@section('title', 'Editar nomina')

@section('content')
	<div class="panel panel-primary">
	  <div class="panel-heading">Editar Nomina</div>
	  	<div class="panel-body">
			{!! Form::model($nomina, ['route' => ['info_nominas.update', $nomina->id], 'method' => 'PATCH']) !!}
				@include('admin.nominas.form')
	    	{!! Form::close() !!}
		</div>
    </div>
@endsection

@section('js')
<script type="text/javascript">
  $(function() {
    $( "#fecha_emision" ).datepicker();
  });
  </script>
<script>
$.datepicker.setDefaults($.datepicker.regional['es-MX']);
$('#fecha_emision').datepicker({
    dateFormat: 'dd/mm/yy',
    changeMonth: true,
    changeYear: true,
    firstDay: 1,
});
</script>
@endsection