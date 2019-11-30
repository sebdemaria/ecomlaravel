<html lang="en" dir="ltr">

  <!--HEAD-->
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico">
    @yield('headerConfigs')
  </head>

  <body>
    <!--HEADER-->
    <header class="head">
      <div class="divlogo">
        <a href="home"> <img class="logo" id="logoLargo" src="img/Biser logo transparent 2.png" alt="logo"> </a>
        <a href="home"> <img class="logo" id="logoCorto" src="img/Biser logo B transparent 2.png" alt="logo"> </a>
      </div>

      <nav class="navbar">
        <form class="form-inline">
          <input id="cuadro-info" class="form-control mr-sm-2" type="search" placeholder="¿Qué buscás?" aria-label="Search">
          <button class="btn" type="submit"><ion-icon class="lupa" name="search"></ion-icon></button>
        </form>
      </nav>

      <div class="carrito">
        <label for="carrito"><a href="carrito.php"><i class="fas fa-shopping-cart"></a></i></label>
      </div>

      <div class="hamb">
        <label for="hamb">
          <i class="fas fa-bars"></i>
        </label>

        <input type="checkbox" id="hamb">

        <div class="menu">
          <div class="menu-izq">
            <ul>
              <li><a class="home" href="home"><i class="fas fa-home"></i></a></li>
            </ul>
          </div>

          <div class="menu-der">
            <ul>
              <li>
                <li><a href="perfil">Mi cuenta</a></li>
                <form class="" action="logout" method="post">
                  <button type="submit" name="button">Salir</button>
                </form>
              </li>
            </ul>
          </div>

          <div class="menu-izq">
            <ul>
              <li><a class="home" href="home"><i class="fas fa-home"></i></a></li>
            </ul>
          </div>

          <div class="menu-der">
            <ul>
              <li><a href="login">Ingresar</a></li>
              <li><a href="registro">Registrate</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <!--MAIN-->
    <div class="container-fluid">
      <main>
        @yield('main')
      </main>
    </div>

    <!--FOOTER-->
    <footer>
      <div class="divFoot"><a href="home">Home</a></div>
      |
      <div class="divFoot"><a href="faq">Preguntas Frecuentes</a></div>
      |
      <div class="divFoot"><a href="contacto">Contacto</a></div>
    </footer>
  </body>
</html>
