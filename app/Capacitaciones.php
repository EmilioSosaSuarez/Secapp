<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capacitaciones extends Model
{
    protected $table = 'capacitaciones';
    protected $fillable = [ 'id',
							'nombre',
							'temario',
							'duracion',
							'extra'
							'fechaAlta'];
}