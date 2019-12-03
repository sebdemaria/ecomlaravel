<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CambioCamposNullableYAgregoApellido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Table('users',function(Blueprint $table){
          $table->string('telefono')->nullable()->change();
          $table->string('direccion')->nullable()->change();
          $table->string('localidad')->nullable()->change();
          $table->string('provincia')->nullable()->change();
          $table->string('apellido');
          $table->string('avatar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      $table->dropColumn('apellido');
      $table->dropColumn('avatar');
    }
}
