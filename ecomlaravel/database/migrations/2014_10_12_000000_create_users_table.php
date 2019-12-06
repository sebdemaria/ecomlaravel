<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
  //Creo la tabla users
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('nombre');
      $table->string('apellido');
      $table->string('username');
      $table->string('email')->unique();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('password');
      $table->date('fecha');
      $table->string('avatar');
      $table->rememberToken();
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('users');
  }
}
