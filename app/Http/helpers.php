<?php 

use Carbon\Carbon;
use App\User;

function fecha_ymd($date){
	return date('Y-m-d', strtotime(str_replace('/', '-', $date)));
}
function fecha_dmy($date){
	return date('d/m/Y', strtotime(str_replace('/', '-', $date)));
}

function getMonth($date) {
    $dt = Carbon::parse($date);
    switch ($dt->month) {
      case 1:
        return 'ENERO';
      case 2:
        return 'FEBRERO';
      case 3:
        return 'MARZO';
      case 4:
        return 'ABRIL';
      case 5:
        return 'MAYO';
      case 6:
        return 'JUNIO';
      case 7:
        return 'JULIO';
      case 8:
        return 'AGOSTO';
      case 9:
        return 'SEPTIEMBRE';
      case 10:
        return 'OCTUBRE';
      case 11:
        return 'NOVIEMBRE';
      case 12:
        return 'DICIEMBRE';
    }

}
function getUsuario($user_id) {
      $user = User::find($user_id);

      return $user->adscripcion.' - '.$user->unidad;
}
function getDay($date) {
    $dt = Carbon::parse($date);
    return $dt->day;
}
function getYear($date) {
    $dt = Carbon::parse($date);
    return $dt->year;
}

function getCancelacion($clave){
  switch ($clave) {
      case 51:
        return 'TERMINO DE CONTRATACION, COMISION O PROVISIONALIDAD';
      case 52:
        return 'DEFUNCION';
      case 53:
        return 'RENUNCIA';
      case 54:
        return 'LICENCIA SIN SUELDO';
      case 55:
        return 'DUPLICIDAD DE NUMERO DE EMPLEADO';
      case 56:
        return 'EXCESO DE INCAPACIDADES';
      case 57:
        return 'RENUNCIA POR PENSION O JUBILACION';
      case 58:
        return 'POR NO TOMAR POSESION DEL CARGO';
      case 59:
        return 'CESE';
      case 60:
        return 'POR NO PRESENTARSE A COBRAR A TIEMPO';
      case 61:
        return 'PAGO IMPROCEDENTE PARCIAL, TRAMITE JURIDICO';
      case 62:
        return 'ERROR DE IMPRESION';
      case 63:
        return 'ERROR DE IMPRESION';
      case 64:
        return 'CANCELADO INDEBIDAMENTE';
      case 65:
        return 'NO LABORAR EN LA UNIDAD';
      case 66:
        return 'CAMBIO DE RESIDENCIA (MEDICOS RESIDENTES)';
      case 67:
        return 'TERMINO DE VIGENCIA';
      case 68:
        return 'POR ROBO O EXTRAVIO';
      case 69:
        return 'DETERIORO O MALTRATO';  
      case 70:
        return 'AJUSTE DE SUELDO';
      case 80:
        return 'CHEQUE DESTRUIDO';
      case 81:
        return 'EXTRAVIO';
    }
  

}


