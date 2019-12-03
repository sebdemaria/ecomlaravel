<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto;

class registroController extends Controller
{
  public function agregarProducto(Request $datos) {

    //Defino reglas de validación
    $reglas = [
      'nombre' => "required|string|min:3",
      'apellido' =>"required|string|min:3",
      'username' =>"required|unique:usuarios,username|string|min:3" ,
      'email' =>"required|unique:usuarios,email|email|min:15",
      'password' =>"required|confirmed|string|min:8",
      'password_confirmation' =>"required|string|min:8",
      'fecha' => "required|date",
      'avatar' => "required|image",
    ];

    //Defino mensajes de error
    $errores = [
      'required' => "Este campo es obligatorio.",
      'unique' => "El :attribute ya esta registrado.",
      'confirmed' => "Las contraseñas no coinciden",
      'string' => "El :attribute no debe contener caracteres especiales.",
      'min' => "El campo debe tener un minimo de :min caracteres.",
      'email' => "El :attribute no tiene formato válido.",
      'date' => "Ingrese una :attribute válida"
    ];

    //Valido datos
    $this->validate($datos, $reglas, $errores);

    //Si no hay errores, almaceno datos
    $usuarioNuevo = new Usuario();
    $usuarioNuevo->nombre = $datos['nombre'];
    $usuarioNuevo->apellido = $datos['apellido'];
    $usuarioNuevo->username = $datos['username'];
    $usuarioNuevo->email = $datos['email'];
    $usuarioNuevo->password_hash = password_hash($datos['password'], PASSWORD_DEFAULT);
    $usuarioNuevo->fecha_nacimiento = $datos['fecha'];

    //Creo la ruta para almacenar los avatars
    $ruta = $datos->file('avatar')->storeAs('public', $datos['email']);
    $nombreArchivo = basename($ruta);
    //Almaceno avatar
    $usuarioNuevo->avatar = $nombreArchivo;

    $usuarioNuevo->save();
    return redirect('/login');
  }
}
?>
