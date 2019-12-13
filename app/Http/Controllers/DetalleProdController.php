<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Producto;

class DetalleProdController extends Controller
{
  public function actualizarEstado(Request $data,$id)
  {
    $producto = Producto::find($id);
    $total = $data['cantidad'] * 10;
    return view('detalle-prod', compact('producto','total'));

  }
}
?>
