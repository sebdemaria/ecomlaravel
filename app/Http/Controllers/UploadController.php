<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UploadController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    //Si es admin
    //$this->middleware();
  }
  public function return(){
    view('/upload');
  }
  public function agregarProducto(Request $datos) {
  //Defino reglas de validación
  $reglas = [
    'nombre' => "required|string|min:5",
    'marca' =>"required|string|min:1",
    'precio' =>"required|integer|min:1",
    'color' =>"required|string|min:5",
    'stock' =>"required|integer|min:1",
    'descripcion' =>"required|string|min:5",
    'avatar' => "required|image",
  ];
  //Defino mensajes de error
  $errores = [
    'required' => "Este campo es obligatorio.",
    'string' => "El :attribute no debe contener caracteres especiales.",
    'min' => "El campo debe tener un minimo de :min caracteres.",
  ];
  //Valido datos
  $this->validate($datos, $reglas, $errores);
  //Si no hay errores, almaceno datos
  $productoNuevo = new Producto();
  $productoNuevo->nombre = $datos['nombre'];
  $productoNuevo->marca = $datos['marca'];
  $productoNuevo->precio = $datos['precio'];
  $productoNuevo->color = $datos['color'];
  $productoNuevo->stock = $datos['stock'];
  $productoNuevo->descripcion = $datos['descripcion'];

  //Creo la ruta para almacenar los avatars
  $ruta = $datos->file('avatar')->storeAs('public/avatar_productos', $datos['nombre']);
  $nombreArchivo = basename($ruta);
  //Almaceno avatar
  $productoNuevo->avatar = $nombreArchivo;
  $productoNuevo->save();
  }
}
?>
