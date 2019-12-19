<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Producto;

class UploadController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    //Si es admin
    //$this->middleware();
  }
  public function vista() {
    return view('upload');
  }
  public function agregarProducto(Request $datos) {
  //Defino reglas de validación
  $reglas = [
    "nombre" => "required|string|min:5",
    "marca" => "required|string|min:1",
    "precio" => "required|integer|min:1",
    "color" => "required|string|min:5",
    "stock" => "required|integer|min:1",
    "descripcion" => "required|string|min:5",
    "avatar" => "required|image"
  ];
  //Defino mensajes de error
  $errores = [
    "required" => "Este campo es obligatorio.",
    "string" => "El :attribute no debe contener caracteres especiales.",
    "min" => "El campo debe tener un minimo de :min caracteres.",
    "integer" => "El campo debe ser numerico"
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
  $ruta = $datos->file('avatar')->storeAs('public', $datos['nombre']);
  $nombreArchivo = basename($ruta);
  //Almaceno avatar
  $productoNuevo->avatar = $nombreArchivo;
  $productoNuevo->save();
  return view('upload');
  }
}
?>
