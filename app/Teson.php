<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teson extends Model
{
   protected $fillable = ['remision_nomina', 'tipo_personal', 'tipo_nomina', 'folio_inicial', 'folio_final', 'fecha_emision', 'fecha_elaboracion', 'observaciones'];
}
