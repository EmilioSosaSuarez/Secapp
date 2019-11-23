<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Contrato;
use App\Persona;

class AsignacionRecursosConContratos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::disableForeignKeyConstraints();
       Schema::create('asignacionRC', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->biginteger('id_contrato')->unsigned()->index();
           $table->biginteger('id_persona')->unsigned()->index();
           $table->timestamps();

           $table->unique(array('id_contrato', 'id_persona'));

           $table->foreign('id_contrato')
           ->references('id')
           ->on('contrato')
           ->onDelete('cascade');

           $table->foreign('id_persona')
           ->references('id')
           ->on('personas')
           ->onDelete('cascade');
         });
         Schema::enableForeignKeyConstraints();
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::disableForeignKeyConstraints();
      Schema::dropIfExists('asignacionRC');
      Schema::enableForeignKeyConstraints();
    }
}
