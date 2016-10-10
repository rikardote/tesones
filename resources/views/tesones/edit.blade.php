@extends('layouts.main')

@section('title', 'Editar TESON')

@section('content')
	<div class="panel panel-primary">
		  <div class="panel-heading">Editar Teson</div>
		<div class="panel-body">
			{!! Form::model($teson, ['route' => ['tesones.update', $teson->id], 'method' => 'PATCH']) !!}
				@include('tesones.form')
  	  {!! Form::submit('Generar Teson', ['class' => 'btn btn-success btn-block']) !!}
	    {!! Form::close() !!}
		</div>
    </div>
@endsection

@section('js')
<script type="text/javascript">
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
<script>
$.datepicker.setDefaults($.datepicker.regional['es-MX']);
$('#datepicker').datepicker({
    dateFormat: 'dd/mm/yy',
    changeMonth: true,
    changeYear: true,
    firstDay: 1,
    onClose: function () {
        $('#datepicker').val(this.value);
    }
});
</script>
@endsection