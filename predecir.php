<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Predecir</title>
    <link rel ="stylesheet" type = "text/css" href = "css.css">
    <link rel="shortcut icon" href="images/icon.png">
    <script type="text/javascript">

      function calculo() {
        const g = 6.674*(10^(-11));
        var m = document.querySelector('.Masa').value;
        var d = document.querySelector('.distancia').value;
        var v = document.querySelector('.velocidad').value;
        var total = ((d*(v)^2)-(g*m))/(d)^2;
        if (total > 0) {
          alert("¡Nos salvamos ya que la fuerza centrifuga fue mayor que la gravitacion! " + total);
        }
        else {
          alert("¡Nos destruirá a todos! ¡Nos destruirá a todos! ¡Nos destruirá a todos! ¡Nos destruirá a todos!");
          alert("La fuerza gravitacional fue mayor a la centrifuga, esto quiere decir que la gravedad hizo que el meteorito caiga en la tierra :C");
        }
      }

    </script>
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
          <li class="nav-item">
            <a class="nav-link" href="index.php">INICIO<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="asteroides.php">METEORITOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="satelites.php">SATELITES</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="predecir.php">PREDICCIÓN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link config" href="#">CONFIGURACIÓN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link regis" href="register.php">REGISTRARSE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link inicio btn btn-outline-success" style="color: green;" href="inicio.php">INICIAR SESIÓN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-ce btn btn-outline-danger" href="index.php">CERRAR SESIÓN</a>
          </li>
        </ul>
      </div>
    </nav>
    <form class="formulario prede">
      <div class="contenedor predecir">
          <h1>Calculadora de impacto</h1>
          <img src="images/formula.png" alt="formula">
          <div class="form-group row pred">
            <label>d = </label>
            <input class="formula distancia" type="text" placeholder="valor de la distancia">
          </div>
          <div class="form-group row pred">
            <label>v = </label>
            <input class="formula velocidad" type="text" placeholder="valor de la velocidad">
          </div>
          <div class="form-group row pred">
            <label>M = </label>
            <input class="formula Masa" type="text" placeholder="valor de la masa">
          </div>
          <div class="form-group row" pred>
            <img style="margin-left: 5px;" src="images/formula2.png">
          </div>
          <input type="submit" value="CALCULAR" class="button" id="predecir" onclick="calculo()">
      </div>
    </form>
  </body>
</html>
