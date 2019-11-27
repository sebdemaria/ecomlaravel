<header class="head">
  <div class="divlogo">
    <a href="home.php"> <img class="logo" id="logoLargo" src="img/Biser logo transparent 2.png" alt="logo"> </a>
    <a href="home.php"> <img class="logo" id="logoCorto" src="img/Biser logo B transparent 2.png" alt="logo"> </a>
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
      <?php if(estaElUsuarioLogeado()) { ?>
        <div class="menu-izq">
          <ul>
            <li><a class="home" href="home.php"><i class="fas fa-home"></i></a></li>
          </ul>
        </div>

        <div class="menu-der">
          <ul>
            <li>
              <li><a href="perfil.php">Mi cuenta</a></li>
              <form class="" action="logout.php" method="post">
                <button type="submit" name="button">Salir</button>
              </form>
            </li>
          </ul>
        </div>
      <?php } else { ?>
        <div class="menu-izq">
          <ul>
            <li><a class="home" href="home.php"><i class="fas fa-home"></i></a></li>
          </ul>
        </div>

        <div class="menu-der">
          <ul>
            <li><a href="login.php">Ingresar</a></li>
            <li><a href="registro.php">Registrate</a></li>
          </ul>
        </div>
      <?php } ?>
    </div>
  </div>
</header>
