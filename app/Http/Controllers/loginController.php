<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;

class loginController extends Controller
{
  public function loguearUsuario(Request $datos) {
    //Defino reglas de validación
    $reglas = [
      'email' =>"required|email|min:15",
      'password' =>"required|string|min:8",
    ];

    //Defino mensajes de error
    $errores = [
      'required' => "Este campo es obligatorio.",
      'string' => "El :attribute no debe contener caracteres especiales.",
      'min' => "El :attribute debe tener un minimo de :min caracteres.",
      'email' => "El :attribute no tiene formato válido.",
    ];

    //Valido datos
    $this->validate($datos, $reglas, $errores);

    //Si no hay errores de tipeo, busco al usuario en la db
    $database = Usuario::all();
    $nombre = null;
    $avatar = null;
    foreach ($database as $usuario) {
      if ($usuario['email'] == $datos['email'] && password_verify ($datos['password'], $usuario['password'])) {
        //Si encuentro al usuario, lo logueo
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['nombre'] = $usuario['nombre'];
        $_SESSION['avatar'] = $usuario['avatar'];
        $nombre = $usuario['nombre'];
        $avatar = $usuario['avatar'];
      }
    }
    $variables = compact("nombre", "avatar");
    return view("perfil", $variables);
  }
}
?>
