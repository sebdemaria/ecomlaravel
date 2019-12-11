<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;

  protected $fillable = [
    'nombre', 'apellido', 'username', 'email','password','fecha','avatar','telefono','direccion','localidad','provincia', 'isAdmin', 'idProducto'
  ];

  protected $hidden = [
    'password', 'remember_token',
  ];

  protected $casts = [
    'email_verified_at' => 'datetime',
  ];
}
?>
