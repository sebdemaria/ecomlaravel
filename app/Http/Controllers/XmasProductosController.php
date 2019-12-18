<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Producto;

class XmasProductosController extends Controller
{
  public function listar()
  {
    $productos = Producto::paginate(12);
    return view("xmas", compact("productos"));
  }
}
