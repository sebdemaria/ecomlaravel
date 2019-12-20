@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Biser - Detalle de producto</title>
  <link rel="stylesheet" href="/css/detalle-prod.css">
@endsection

<!-- MAIN -->
@section('main')
  <div class="container">
    <!-- Fotos del producto -->
    <div class="imagen">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/img/iphone-11.png" alt="iphone 11">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/img/iphone-11-front.png" alt="iphone 11">
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>


  <div class="descrip-prod">
    <h3><strong>{{$producto->nombre}}</strong></h3>
    <p class="precio">
      ${{$producto->precio}}
    </p>
    <p>
      3 cuotas sin interés de $ {{number_format((($producto->precio)/3), $decimals = 0 , $dec_point = "." , $thousands_sep = "," ) }}
    </p>
    <p class="caracts">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <div>
      <p>
        ${{$producto->precio}}
      </p>
      <form class="cantidad" action="{{url('carrito')}}" method="post">
        @csrf
        <input type="hidden" name="idProducto" value="{{$producto->id}}">
        <select name="colores" placeholder="{{old('colores')}}">
          <option value="negro">Negro</option>
          <option value="rojo">Rojo</option>
          <option value="azul">Azul</option>
        </select>
        <label for="cantidad">Cantidad</label>
        <input type="text" id="cantidad" name="cantidad" value="1" placeholder="{{old('cantidad')}}">
        <div class="button">
          <button id="button-agregar" type="submit" class="btn btn-primary">Comprar</button>
        </div>
        <div class="button">
          <button id="button-agregar" type="submit" class="btn btn-outline-primary">Agregar al carrito</button>
        </div>
      </form>
    </div>
  </div>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
@endsection
