<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Inicio</title>
    <link rel ="stylesheet" type = "text/css" href = "css.css">
    <link rel="shortcut icon" href="images/icon.png">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background: : #341240;">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="navbar-brand" href="#">
              <img src="images/icon.png" width="35" height="35" class="d-inline-block align-top" alt="" loading="lazy">
              METEOR
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">INICIO<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="asteroides.php">METEORITOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="satelites.php">SATELITES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="predecir.php">PREDICCIÓN</a>
          </li>
          <?php
            if (isset($_SESSION['nombre'])) {
              echo '<li class="nav-item">
                <a class="nav-link config" href="#">CONFIGURACIÓN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-ce btn btn-outline-danger" href="#">CERRAR SESIÓN</a>
              </li>';
            }
            else {
              echo '<li class="nav-item">
                <a class="nav-link regis" href="register.php">REGISTRARSE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link inicio btn btn-outline-success" style="color: green;" href="inicio.php">INICIAR SESIÓN</a>
              </li>';
            }
          ?>
          <!--<li class="nav-item">
            <a class="nav-link config" href="#">CONFIGURACIÓN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link regis" href="register.php">REGISTRARSE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link inicio btn btn-outline-success" style="color: green;" href="inicio.php">INICIAR SESIÓN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-ce btn btn-outline-danger" href="#">CERRAR SESIÓN</a>
          </li>-->
        </ul>
      </div>
    </nav>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/carousel/1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/carousel/2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/carousel/3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </body>
</html>
