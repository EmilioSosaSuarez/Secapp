<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapacitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacitaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('temario');
            $table->number('duracion');
            $table->string('extra');
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
        Schema::dropIfExists('capacitaciones');
    }
}