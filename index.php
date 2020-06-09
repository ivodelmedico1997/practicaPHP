<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Primer trabajo practico PHP</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
  </head>


  <body>
    <!-- Barra navegacion -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <a class="navbar-brand" href="#">TP 1</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./ejer1.php">Ejercicio 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./ejer2.php">Ejercicio 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./ejer3.php">Ejercicio 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./ejer4.php">Ejercicio 4</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./ejer5.php">Ejercicio 5</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./ejer6.php">Ejercicio 6</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./ejer7.php">Ejercicio 7</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Contenedor de las 7 tarjetas -->
    <div class="row d-flex p-2 bd-highlight justify-content-center">
      <!-- Tajeta 1 -->
      <div class="card bg-info m-2 p-2" style="width: 18rem;">
        <img src="img/1.jpg" class="card-img-top" alt="..." />
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">01</h5>
          <p class="card-text text-center">
            La página sólo estará disponible los primeros 10 días del mes.
          </p>
          <a href="./ejer1.php" class="btn btn-primary">Entrar</a>
        </div>
      </div>

      <!-- Tajeta 2 -->
      <div class="card bg-info m-2 p-2" style="width: 18rem;">
        <img src="img/2.jpg" class="card-img-top" alt="..." />
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">02</h5>
          <p class="card-text text-center">
            Generar un numero aleatorio entre 1 al 100 (rand).
          </p>
          <a href="./ejer2.php" class="btn btn-primary">Entrar</a>
        </div>
      </div>

      <!-- Tajeta 3 -->
      <div class="card bg-info m-2 p-2" style="width: 18rem;">
        <img src="img/3.jpg" class="card-img-top" alt="..." />
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">03</h5>
          <p class="card-text text-center">
            Generar aleatoriamente un valor entre 1 y 999.
          </p>
          <a href="./ejer3.php" class="btn btn-primary">Entrar</a>
        </div>
      </div>

      <!-- Tajeta  4-->
      <div class="card bg-info m-2 p-2" style="width: 18rem;">
        <img src="img/4.jpg" class="card-img-top" alt="..." />
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">04</h5>
          <p class="card-text text-center">
            Generar aleatoriamente un valor entre 1 y 7.
          </p>
          <a href="./ejer4.php" class="btn btn-primary">Entrar</a>
        </div>
      </div>

      <!-- Tajeta  5-->
      <div class="card bg-info m-2 p-2" style="width: 18rem;">
        <img src="img/5.jpg" class="card-img-top" alt="..." />
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">05</h5>
          <p class="card-text text-center">
            Generar y mostrar los números del 1 al 100 (for).
          </p>
          <a href="./ejer5.php" class="btn btn-primary">Entrar</a>
        </div>
      </div>

      <!-- Tajeta  6-->
      <div class="card bg-info m-2 p-2" style="width: 18rem;">
        <img src="img/6.png" class="card-img-top" alt="..." />
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">06</h5>
          <p class="card-text text-center">
            Generar un valor aleatorio entre 1 y 100 (while).
          </p>
          <a href="./ejer6.php" class="btn btn-primary">Entrar</a>
        </div>
      </div>

      <!-- Tajeta  7-->
      <div class="card bg-info m-2 p-2" style="width: 18rem;">
        <img src="img/7.png" class="card-img-top" alt="..." />
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">07</h5>
          <p class="card-text text-center">
            La tabla del 5 usando for, while, do/while.
          </p>
          <a href="./ejer7.php" class="btn btn-primary">Entrar</a>
        </div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
