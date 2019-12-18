@extends('layouts.plantilla')

<!-- HEAD -->
@section('headerConfigs')
  <title>Biser - Home</title>
  <link rel="stylesheet" href="/css/home.css">
@endsection

<!-- MAIN -->
<script>
var resultado = null;
  var mensaje = "Nuestro sitio utiliza cookies. ¿Estás de acuerdo con el uso de las mismas?";
  var resultado = confirm(mensaje);

</script>
@section('main')
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="foto" src="/img/banner-summer.jpg" alt="promo verano">
      </div>
      <div class="carousel-item">
        <img class="foto" src="/img/banner-navidad.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <section>
    <div class="prod1">
      <img class="iphone" src="/img/iphone-xs-gold.png" alt="iphone xs gold">
      <p>
        Celulares
        <br>
        <strong>40% off</strong>
      </p>
    </div>

    <div class="prod2">
      <img src="/img/ps4-vertical.png" alt="iphone xs gold">
      <p>
        Consolas de juegos
        <br>
        <strong>30% off</strong>
      </p>
    </div>

    <div class="prod1">
      <img class="lancha" src="/img/lancha.png" alt="náutica">
      <p>
        Náutica
        <br>
        <strong>20% off</strong>
      </p>
    </div>

    <div class="prod2">
      <img src="/img/bose-bluetooth.png" alt="bose bluetooth">
      <p>
        Parlantes bluetooth
        <br>
        <strong>15% off</strong>
      </p>
    </div>

    <div class="envios">
      <img src="/img/shop-bag.png" alt="bag">
      <p>
        ¡Envios gratis a todo el pais!
        <br>
      </p>
    </div>
  </section>

  <div class="photo-container">
    <a href="xmas"><img class="dia-madre" src="/img/banner-xmas.jpg" alt="Dia de la madre">
    <img class="fifty-off" src="/img/50-off.png" alt=""></a>
  </div>

  <div class="lista-prod">
    <ul>
      <li>
        <div class="imagen">
          <img src="/img/samsung-a50.png" alt="samsung a50">
        </div>
        <div class="descrip-prod">
          <h3><strong>Samsung A50 64GB 2019</strong></h3>
          <p>
            3 cuotas sin interés de $3.499,99
          </p>
          <a id="ver-mas" href="productos" class="btn btn-primary">Ver Más</a>
        </div>
      </li>
      <li>
        <div class="imagen">
          <img src="/img/lg smart 49 4k.png" alt="lg smart tv">
        </div>

        <div class="descrip-prod">
          <h3><strong>Smart TV LG 49" 4K Full HD</strong></h3>
          <p>
            3 cuotas sin interés de $3.166,60
          </p>
          <a id="ver-mas" href="#" class="btn btn-primary">Ver Más</a>
        </div>
      </li>
      <li>
        <div class="imagen">
          <img src="/img/ipad-pro.png" alt="ipad pro">
        </div>

        <div class="descrip-prod">
          <h3><strong>Apple iPad Pro 12.9" 256 GB</strong></h3>
          <p>
            3 cuotas sin interés de $8.333,33
          </p>
          <a id="ver-mas" href="#" class="btn btn-primary">Ver Más</a>
        </div>
      </li>
      <li>
      </li>
    </ul>
    <div class="masProds">
      <a id="mucho-mas" href="productos" class="btn btn-outline-primary">Ver Más</a>
    </div>
  </div>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
@endsection
