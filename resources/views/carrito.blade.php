@extends('plantilla')
<html lang="en" dir="ltr">
    <head>
      @section('headerConfigs')
      <title>Mi Carrito</title>
      <link rel="stylesheet" href="css/carrito.css">
      @endsection
    </head>

    <body>

      <div class="container-fluid">

        @section('main')

          <main>

            <h1>
              Mi carrito
            </h1>

            <div class="lista-prod">

              <ul>
                <li>

                  <div class="imagen">
                    <img src="img/samsung-a50.png" alt="samsung a50">
                  </div>

                  <div class="descrip-prod">

                    <h3><strong>Samsung A50 64GB 2019</strong></h3>
                    <p class="descripcion">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="button">
                      <button id="button-quitar" type="button-compra" class="btn btn-primary">Quitar</button>
                    </div>

                    <div class="button">
                      <button id="agregar" type="button-compra" class="btn btn-success">-   1   +</button>
                    </div>

                  </div>
                </li>

              </ul>
              <p class="total">
                Subtotal $10.500
                <br>
                <br>
                Total $10.500

              </p>

              <a href="checkout.php">
              <button id="button-confirmar" type="button" class="btn btn-outline-primary">Confirmar compra</button>
              </a>

            </div>

        </main>

      </div>


      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
      @endsection
    </body>
</html>
