@extends('layouts.main')

@section('title', 'CREAR TESON')

@section('content')

	
	<div class="panel panel-primary">
		  <div class="panel-heading">Nuevo Teson</div>
		<div class="panel-body">
			{!! Form::open(['route' => 'tesones.store', 'method' => 'POST']) !!}
				@include('tesones.form')
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