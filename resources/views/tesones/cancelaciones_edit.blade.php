@extends('layouts.main')

@section('title', 'Capturar Cancelaciones')

@section('content')

	<div class="panel panel-primary">
		  <div class="panel-heading">MODIFICAR CANCELACION</div>
		<div class="panel-body">
			
			{!! Form::model($cancelacion, ['route' => ['cancelar.teson.update', $cancelacion->id], 'method' => 'PATCH']) !!}
				@include('tesones.form_cancelacion')

  	  {!! Form::submit('Modificar Cancelacion', ['class' => 'btn btn-success btn-block']) !!}
	    {!! Form::close() !!}


		</div>
	
	</div>


<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31  && (charCode < 48 || charCode > 57) )
         	if ( charCode != 46 ) 
            return false;

         return true;
      }
      //-->
 </SCRIPT>
 <SCRIPT language=Javascript>
      <!--
      function isNumberKeyAndDot(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31  && (charCode < 48 || charCode > 57) )
         	if ( charCode != 46 ) 
            return false;

         return true;
      }
      //-->
 </SCRIPT>

@endsection