<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('contrato', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nombre');
          $table->string('numero');
          $table->string('cliente');
          $table->string('descripcion');
          $table->string('fechaCreacion');
          $table->string('fechaVencimiento');
          $table->char('estado', 1);
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
        Schema::dropIfExists('contratos');
    }
}
