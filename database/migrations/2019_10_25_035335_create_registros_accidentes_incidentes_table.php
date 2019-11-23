<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrosAccidentesIncidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrosAccidentesIncidente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tiposuceso');
            $table->string('sector');
            $table->string('fecha');
            $table->string('turno');
            $table->string('horario');
            $table->time('hsSuceso');
            $table->string('personaId');
            $table->char('tareaHabitual', 2);
            $table->string('capacitacion');/* deberia ser el ide de una capacitacion particular */
            $table->string('permiso');
            $table->string('descripcion');
            $table->string('clasificacion');
            $table->string('causasInmediatas');
            $table->string('causasBasicas');
            $table->string('accionesCorrectivas');
            $table->string('accionRemedial');
            $table->integer('plazo');
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
        Schema::dropIfExists('registrosAccidentesIncidente');
    }
}
