<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = 'asignacionRC';
    protected $fillable = ['id',
              'id_contrato',
              'id_persona',];
}
