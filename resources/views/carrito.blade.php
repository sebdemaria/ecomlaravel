@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Biser - Mi Carrito</title>
  <link rel="stylesheet" href="/css/carrito.css">
@endsection

<!-- MAIN -->
@section('main')
  <h1>
    Mi carrito
  </h1>

  <div class="lista-prod">
    <ul>
      @foreach ($carritos as $producto)
        <li>
          <div class="imagen">
            <img src="/img/iphone-11.png" alt="iphone 11">
          </div>

          <div class="descrip-prod">
            <h3><strong>{{$producto->nombre}}</strong></h3>

            <form class="cantidad" action="/modificarCantidad" method="post">
            @csrf
              <input type="hidden" name="idProducto" value="{{$producto->id}}">
              <label for="cantidad">Cantidad</label>
              <input type="text" name="cantidad" value="{{$producto->pivot->cantidad}}" class="form-control">
              <div class="button">
                <button id="agregar" type="submit" class="btn btn-success">Actualizar Cantidad</button>
              </div>
            </form>
            <form class="borrar" action="/borrarProducto" method="post">
            @csrf
              <input type="hidden" name="idProducto" value="{{$producto->id}}">
                <div class="button">
                  <button id="button-quitar" type="submit" class="btn btn-primary">Quitar</button>
                </div>
            </form>
          </div>
        </li>

        <p class="total">
          Subtotal: {{$producto->precio}}
          <br>
          <br>
          Total: {{($producto->pivot->cantidad)*$producto->precio}}
        </p>
      @endforeach
    </ul>

    <a href="checkout">
    <button id="button-confirmar" type="button" class="btn btn-outline-primary">Confirmar compra</button>
    </a>
  </div>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
@endsection
