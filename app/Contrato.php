<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = 'contrato';
    protected $fillable = ['id',
              'nombre',
              'numero',
              'cliente',
              'descripcion',
              'fechaCreacion',
              'fechaVencimiento',
              'estado'];
}
