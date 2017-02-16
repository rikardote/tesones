<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
	public $timestamps = false;
    protected $fillable = ['fecha_emision', 'nomina', 'comentario'];

   	public function tesones()
    {
    	return $this->hasMany('App\Teson');
    }

    public function getFullnominaAttribute() {
        return $this->nomina . ' - Fecha de emisión: ' . fecha_dmy($this->fecha_emision);
    }
    

}
