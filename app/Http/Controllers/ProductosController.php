<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Producto;
use App\Carrito;

class ProductosController extends Controller
{
  public function listar()
  {
    $productos = Producto::paginate(12);
    return view("productos", compact("productos"));
  }

  public function buscar(Request $datos)
  {
    $productos = Producto::paginate(8);
    return view("productos", compact("productos"));
  }

  public function borrarProducto(Request $datos){
    //Obtengo el id del input hidden
    $idProducto = $datos['idProducto'];
    //Busco el producto y lo borro
    $productoEncontrado = Producto::find($idProducto);
    if($productoEncontrado){
      $productoEncontrado->delete();
    }
    
    //Busco todos los carritos que tengan ese producto
    $carritos = Carrito::where('idProducto',$idProducto)->get();

    //Borro cada carrito que exista, para no tener conflicto con el id
    //del producto
    foreach($carritos as $carrito){
      $carrito->delete();
    }

    return redirect('/productos');
  }
}
?>
