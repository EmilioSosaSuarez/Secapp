<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    protected $fillable = [ 'id',
							'apellido',
							'nombre',
							'dni',
							'sexo',
							'fechaNacimiento',
							'nacionalidad',
							'cuilCuit',
							'provincia',
							'ciudad',
							'direccion',
							'email',
							'celular',
							'telefono',
							'estadoLaboral',
							'fechaAlta',
							'fechaBaja'];
}
