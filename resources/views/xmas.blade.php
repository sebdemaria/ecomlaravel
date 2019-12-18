@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Biser - Listado de productos</title>
  <link rel="stylesheet" href="/css/xmas.css">
@endsection

<!-- MAIN -->
@section('main')
  <div class="caja-principal">
    <img class="xmas" src="/img/banner-xmas.jpg" alt="xmas disscount">
    <div class="paginacion">
      {{$productos->links()}}
    </div>
    @foreach ($productos as $producto)
      <div class="productos">

        <!-- Imagen del producto -->
        <p>
          <div class="container">
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
        </p>

        <!-- Nombre del producto -->
        <p>
          {{$producto->nombre}}
        </p>


        <!-- Marca del producto -->
        <p>
          {{$producto->marca}}
        </p>

        <!-- Precio del producto -->
        <p>
          ${{$producto->precio}}
        </p>
          <!--Ver más -->
          <form class="" action="{{url('detalle-prod')}}/{{$producto->id}}" method="get">


              <button id="button-agregar" type="submit" class="button btn btn-outline-primary">Ver más</button>

          </form>

      </div>
    @endforeach
  </div>
  <div class="paginacion">
    {{$productos->links()}}
  </div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
@endsection
