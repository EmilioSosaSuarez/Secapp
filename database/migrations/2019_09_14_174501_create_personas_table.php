<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('apellido');
            $table->string('nombre');
            $table->string('dni');
            $table->char('sexo', 1);
            $table->string('fechaNacimiento');
            $table->string('nacionalidad');
            $table->string('cuilCuit',11);
            $table->string('provincia');
            $table->string('ciudad');
            $table->string('direccion');
            $table->string('email');
            $table->string('celular');
            $table->string('telefono')->nullable();
            $table->string('estadoLaboral');
            $table->string('fechaAlta');
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
        Schema::dropIfExists('personas');
    }
}
