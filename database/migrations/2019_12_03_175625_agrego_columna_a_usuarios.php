<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregoColumnaAUsuarios extends Migration
{
  //Agrego columnas a usuarios
  public function up()
  {
    Schema::Table('users',function(Blueprint $table){
      $table->string('telefono')->nullable();
      $table->string('direccion')->nullable();
      $table->string('localidad')->nullable();
      $table->string('provincia')->nullable();
      $table->boolean('isAdmin')->default(false);
    });
  }
  //Borro las columnas del usuario
  public function down()
  {
    $table->dropColumn('telefono');
    $table->dropColumn('direccion');
    $table->dropColumn('localidad');
    $table->dropColumn('provincia');
    $table->dropColumn('isAdmin');
    $table->dropColumn('idProducto');
  }
}
