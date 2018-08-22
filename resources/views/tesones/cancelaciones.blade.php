@extends('layouts.main')

@section('title', 'Capturar Cancelaciones')

@section('content')

	<div class="panel panel-primary">
		  <div class="panel-heading">AGREGAR CANCELACIONES</div>
		<div class="panel-body">
			{!! Form::open(['route' => ['cancelar.teson.store', $teson->id], 'method' => 'POST']) !!}
				@include('tesones.form_cancelacion')
			<table class="table table-hover">
				<thead>
					<th>Numero de Empleado</th>
					<th>Nombre</th>
					<th>Num Cheque</th>
					<th>Importe</th>
					<th>Clave</th>
					<th>Opciones</th>
				</thead>
				<tbody>
					@foreach($cancelaciones as $cancelacion)
						<tr>
							<td>{{$cancelacion->num_empleado}}</td> 
							<td>{{$cancelacion->nombre}}</td> 
							<td>{{$cancelacion->numero_cheque}}</td>
							<td>$ {{number_format($cancelacion->importe,2)}}</td>
							<td>{{$cancelacion->clave}}</td>
							<td><a href="{{route('cancelar.teson.edit', $cancelacion->id) }}"><span class="fa fa-pencil-square-o fa-2x" aria-hidden='true'></span></a>   
			        		<a onclick="return confirm('¿Esta seguro de eliminarlo?')" href="{{route('cancelar.destroy', $cancelacion->id) }}"><span class="fa fa-trash fa-2x" aria-hidden='true'></span></td>
						</tr>
					@endforeach
				</tbody>
			</table>  	  
  	  {!! Form::submit('Agregar Cancelacion', ['class' => 'btn btn-success btn-block']) !!}
	    {!! Form::close() !!}


		</div>
	
	</div>
<a href="/tesones/{{$teson->id}}">Regresar</a>

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