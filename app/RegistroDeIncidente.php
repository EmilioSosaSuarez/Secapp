<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroDeIncidente extends Model
{
    protected $table = 'registrosDeIncidentes';
    protected $fillable = [ 'id',
							'tiposuceso',
							'sector',
							'fecha',
							'turno',
							'horario',
							'hsSuceso',
							'personaId',
							'tareaHabitual',
							'capacitacion',
							'permiso',
							'descripcion',
							'clasificacion',
							'causasInmediatas',
							'causasBasicas',
							'accionesCorrectivas',
							'accionRemedial',
							'plazo'];
}



 // }