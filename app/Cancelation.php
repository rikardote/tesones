<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancelation extends Model
{
    protected $fillable = ['num_empleado', 'nombre', 'numero_cheque', 'importe', 'clave'];
}
