<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teson extends Model
{
   protected $fillable = ['remision_nomina', 'tipo_personal', 'nomina_id', 'folio_inicial', 'folio_final', 'fecha_elaboracion', 'observaciones'];

   public function nomina()
   {
       return $this->belongsTo('App\Nomina');
   }
   
}
