@extends('layouts.main')

@section('title', 'CREAR TESON')

@section('content')

	
	<div id="app" class="panel panel-primary">
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

  <script>
    var vm = new Vue({
      el: '#app',
      data: {
        v_tipo_pago: '',
        folio1: '',
        folio2: ''
      },
      computed: {
        checkFolio: function() {
          var boton = document.getElementById("boton");
          boton.disabled = true;

          var folio1 = this.folio1.trim();
          var folio2 = this.folio2.trim();
          
          if(folio2 < folio1) {
              return "El folio final no puede ser menor al folio inicial";
          }
        
          if (this.v_tipo_pago == 1 && folio1.length == 7 && folio2.length == 7) {
            boton.disabled = false;
          }
          if (this.v_tipo_pago == 1 && folio1.length == 6 && folio2.length == 6) {
            boton.disabled = true;
            return 'Error debito deben ser 7 Digitos!!';
          }
          if (this.v_tipo_pago == 2 && folio1.length == 6 && folio2.length == 6) {
            boton.disabled = false;
          }
          if (this.v_tipo_pago == 2 && folio1.length == 7 && folio2.length == 7) {
            boton.disabled = true;
            return 'Error cheques deben ser 6 Digitos!!';
          }

          if (this.v_tipo_pago == 3) {
            boton.disabled = false;
          }

          if (this.v_tipo_pago == 4 && folio1.length == 6 && folio2.length == 6) {
            boton.disabled = false;
          }
          if (this.v_tipo_pago == 4 && folio1.length == 7 && folio2.length == 7) {
            boton.disabled = true;
            return 'Error cheques deben ser 6 Digitos!!';
          }
        }
        
      }
    })
  </script>
@endsection