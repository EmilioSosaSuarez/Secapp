<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantesDictadoCap extends Model
{
    protected $table = 'capacitacionesDictadoCap';
    protected $fillable = [ 'id',
    						'idCapacitacion'
							'DNI',
							'nombre',
							'apellido'];
}