<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Producto;
use App\Carrito;

class CarritoController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function listar(Request $datos) {
    if(Auth::check()){
      $carritos = Auth::user()->productos()->get();
      //return view('carrito',compact('carritos'));
    } else {
      return redirect('/');
    }

    //Traigo productos
    $productos = Producto::all();
    $precio = 0;
    foreach ($productos as $producto) {
      if ($producto->id == $datos->idProducto) {
        $precio = $producto->precio;
      }
    }
    return view('/carrito', compact('carritos', 'precio'));
  }

  public function agregar(Request $datos) {
    $productoNuevo = Carrito::where('idProducto', $datos->idProducto)->where('idUsuario', Auth::user()->id);
    if ($productoNuevo->exists()) {
      $carrito = $productoNuevo->get()->first();
      $carrito->cantidad = $carrito->cantidad + $datos->cantidad;
    } else {
      $carrito = new Carrito();
      $carrito->idUsuario = Auth::user()->id;
      $carrito->idProducto = $datos->idProducto;
      $carrito->cantidad = $datos->cantidad;
    }
    $carrito->save();
    return redirect('/carrito');
  }

  public function borrarProducto(Request $datos) {
    $producto = Carrito::where('idProducto', $datos->idProducto)->where('idUsuario',Auth::user()->id);
    if ($producto->exists()) {
      $producto->delete();
    }
    return redirect('/carrito');
  }

  public function modificarCantidad(Request $datos) {
    $producto = Carrito::where('idProducto',$datos->idProducto)->where('idUsuario',Auth::user()->id);
    if($producto->exists()) {
      $resultado = $producto->get()->first();
      $resultado->cantidad = $datos->cantidad;
      $resultado->save();
      return redirect('/carrito');
    }
  }
}
