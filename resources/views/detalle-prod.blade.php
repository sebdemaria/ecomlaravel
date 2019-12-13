@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Detalle de producto</title>
  <link rel="stylesheet" href="/css/detalle-prod.css">
@endsection

<!-- MAIN -->
@section('main')
  <div class="container">
    <div class="imagen">
      <img src="/img/samsung-a50.png" alt="samsung a50">
    </div>

    <div>
    <p>
      Seleccionar color:
      <form class="colores" action="detalle-prod" method="post">
        @csrf
        <select name="colores" placeholder="{{old('colores')}}">
           <option value="negro">Negro</option>
           <option value="rojo">Rojo</option>
           <option value="azul">Azul</option>
        </select>
      </form>
    </p>

    <p>
      Seleccionar cantidad:
      <form class="cantidad" action="detalle-prod" method="post">
        @csrf
        <input type="text" id="cantidad" name="cantidad" value="" placeholder="{{old('cantidad')}}">
    </p>

    <p>
      Total: ${{$producto->precio}}
    </p>

    </div>

    <div class="descrip-prod">
      <h3><strong>{{$producto->nombre}}</strong></h3>
      <p id="precio">
        ${{$producto->precio}}
      </p>
      <p>
        3 cuotas sin interés de ${{($producto->precio)/3}}
      </p>
      <p class="caracts">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <div class="botones">
        <div class="button">
          <a href="checkout"><button id="button-compra" type="button-compra" class="btn btn-primary">Comprar</button><a>
        </div>
        <div class="button">
          <button id="button-agregar" type="button" class="btn btn-outline-primary">Agregar al carrito</button>
        </div>
      </div>
    </div>
  </div>
  <!--<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script>
    window.onload = function(){
      document.querySelector("#cantidad").onblur = (function(){
          document.querySelector("#precio").innerHTML = document.querySelector("#cantidad").innerHTML * document.querySelector("#precio").innerHTML;
      })
    }
  </script>-->
@endsection
