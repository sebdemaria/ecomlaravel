<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
  public function estaLogueado() {
    $email = $_POST['email'];
    $variables = compact("email");
    return view('login', $variables);
  }


}

?>
