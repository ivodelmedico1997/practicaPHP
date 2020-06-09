<!DOCTYPE html>
<html>
  <head>
    <title>Ejercicio 4</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <a class="navbar-brand" href="./index.php">TP 1</a>
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
            <a class="nav-link" href="./index.php"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
        </ul>
      </div>
    </nav>
    <div class="jumbotron">
      <h1 class="display-4">Bienvenido al ejercicio 4</h1>
      <p class="lead">
      <?php
        $num = rand(1, 7);
        if ($num == 1) {;
            echo "El numero es ", $num, " y su dia de semana es Lunes";
        } elseif ($num == 2) {
            echo "El numero es ", $num, " y su dia de semana es Martes";
        } elseif ($num == 3) {
            echo "El numero es ", $num, " y su dia de semana es Miercoles";
        } elseif ($num == 4) {
            echo "El numero es ", $num, " y su dia de semana es Jueves";
        } elseif ($num == 5) {
            echo "El numero es ", $num, " y su dia de semana es Viernes";
        } elseif ($num == 6) {
            echo "El numero es ", $num, " y su dia de semana es Sabado";
        } else {
            echo "El numero es ", $num, " y su dia de semana es Domingo";
        }

      ?>
      </p>

      <a class="btn btn-primary btn-lg" href="./index.php" role="button"
        >Volver</a
      >
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
