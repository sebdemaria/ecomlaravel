<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  public $table = "usuarios";
  public $primaryKey = "id";
  public $timestamps = false;
  public $guarded = [];
}

?>
