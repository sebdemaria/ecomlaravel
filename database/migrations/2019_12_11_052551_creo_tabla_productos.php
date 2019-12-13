<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreoTablaProductos extends Migration
{
  //Creo la tabla users
  public function up()
  {
    Schema::create('productos', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('nombre');
      $table->string('marca');
      $table->integer('precio');
      $table->string('color');
      $table->integer('stock');
      $table->rememberToken();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('productos');
  }
}
