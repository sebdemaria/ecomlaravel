<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregoColumnaAUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //Agrego columnas a usuarios
    public function up()
    {
        Schema::Table('users',function(Blueprint $table){
          $table->string('telefono');
          $table->string('direccion');
          $table->string('localidad');
          $table->string('provincia');
          $table->boolean('isAdmin')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //Borro las columnas del usuario
    public function down()
    {
        $table->dropColumn('telefono');
        $table->dropColumn('direccion');
        $table->dropColumn('localidad');
        $table->dropColumn('provincia');
        $table->dropColumn('isAdmin');

    }
}
