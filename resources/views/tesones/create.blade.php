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

<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
 </SCRIPT>

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
          //v_tipo_pago = 1 BBVA DEBITO
          //v_tipo_pago = 2 CHEQUES
          //v_tipo_pago = 7 DEBITO SPEI
          if(folio2 < folio1) {
              return "!! EL FOLIO FINAL NO PUEDE SER MENOR AL FOLIO INICIAL !!";
          }
          if ((this.v_tipo_pago == 1 || this.v_tipo_pago == 7 )  && (folio1.length != 7 || folio2.length != 7)) return '!! BBVA DEBITO ó SPEI DEBEN SER 7 DIGITOS !!';
          if ((this.v_tipo_pago == 2 || this.v_tipo_pago == 4 )  && (folio1.length != 6 || folio2.length != 6)) return '!! CHEQUE DEBEN SER 6 DIGITOS !!';
          
          boton.disabled = (this.v_tipo_pago == 1 || this.v_tipo_pago == 7 )  && (folio1.length == 7 && folio2.length == 7) ? false : 
                           (this.v_tipo_pago == 2 || this.v_tipo_pago == 4 )  && (folio1.length == 6 && folio2.length == 6) ? false : true;

       
        }
        
      }
    })
  </script>
@endsection