<?php 
use Carbon\Carbon;
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
function getDay($date) {
    $dt = Carbon::parse($date);
    return $dt->day;
}
function getYear($date) {
    $dt = Carbon::parse($date);
    return $dt->year;
}