<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCarrito extends Migration
{
  public function up()
  {
    Schema::create('Carritos', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->integer('idUsuario');
      $table->integer('idProducto');
      $table->integer('cantidad')->default(1);
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('Carritos');
  }
}
?>
