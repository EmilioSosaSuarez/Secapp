<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapacitacionesDictadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacitacionesDictado', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('capacitador');
            $table->string('fecha');
            $table->string('temario');
            $table->number('duracion');
            $table->string('participantes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capacitaciones_dictado');
    }
}
