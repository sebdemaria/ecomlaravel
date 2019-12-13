<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
  public function listar()
  {
    $productos = Producto::paginate(10);
    return view("productos", compact("productos"));
  }
}
