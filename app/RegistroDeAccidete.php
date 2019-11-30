<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroDeAccidente extends Model
{
    protected $table = 'registrosAccidentesIncidente';
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


 // public function vehiculo(){
 //   return $this->belongsTo(Vehiculo::class, 'vehiculoId');
 // }