<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Carrito;
class CarritoController extends Controller
{
    public function listar(){
        if(Auth::check()){
            $carritos = Auth::user()->productos()->get();
            return view('carrito',compact('carritos'));
        }else{
            return redirect('/');
        }
    }

    public function agregar(Request $r){
        $productoNuevo = Carrito::where('idProducto',$r->idProducto)->where('idUsuario',Auth::user()->id);
        if($productoNuevo->exists()){
            $carrito = $productoNuevo->get()->first();
            $carrito->cantidad = $carrito->cantidad + $r->cantidad;
        }else{
            $carrito = new Carrito();
            $carrito->idUsuario = Auth::user()->id;
            $carrito->idProducto = $r->idProducto;
            $carrito->cantidad = $r->cantidad;
        }
        $carrito->save();
        return redirect('/carrito');
    }

    public function borrarProducto(Request $r){
        $producto = Carrito::where('idProducto',$r->idProducto)->where('idUsuario',Auth::user()->id);
        if($producto->exists()){
            $producto->delete();
        }

        return redirect('/carrito');
    }

    public function modificarCantidad(Request $r){
        $producto = Carrito::where('idProducto',$r->idProducto)->where('idUsuario',Auth::user()->id);
        if($producto->exists()){
            $resultado = $producto->get()->first();
            $resultado->cantidad = $r->cantidad;
            $resultado->save();
            return redirect('/carrito');
        }

    }
}
