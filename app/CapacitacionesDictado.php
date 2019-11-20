<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapacitacionesDictado extends Model
{
    protected $table = 'capacitacionesDictado';
    protected $fillable = [ 'id',
							'nombre',
							'capacitador',
							'fecha',
							'temario',
							'duracion',
							'participantes'];
}