<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Satélites</title>
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
          <li class="nav-item">
            <a class="nav-link" href="index.php">INICIO<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="asteroides.php">METEORITOS</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="sarelites.php">SATELITES</a>
          </li>
          <li class="nav-item">
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
            <a class="nav-link nav-ce btn btn-outline-danger" href="#">CERRAR SESIÓN</a>
          </li>
        </ul>
      </div>
    </nav>
    <table class="table table-light">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Fabricante</th>
          <th scope="col">Estado</th>
        </tr>
      </thead>
      <tbody>
        <tr class="table-danger">
          <th scope="row">1</th>
          <td>AntelSat</td>
          <td>ANTEL y Facultad de Ingenieria de la Universidad de la República</td>
          <td>Inactivo</td>
        </tr>
        <tr class="table-success">
          <th scope="row">2</th>
          <td>Batsú-C S1</td>
          <td>Asociación Centroamericana de Aeronáutica y del Espacio</td>
          <td>Activo</td>
        </tr>
        <tr class="table-success">
          <th scope="row">3</th>
          <td>PUCP SAT-1</td>
          <td>Pontificia Universidad Católica del Perú</td>
          <td>Activo</td>
        </tr>
        <tr class="table-success">
          <th scope="row">4</th>
          <td>Ørsted</td>
          <td>Instituto Meteorológico Danés</td>
          <td>Activo</td>
        </tr>
        <tr class="table-danger">
          <th scope="row">5</th>
          <td>VENESAT-1</td>
          <td>Agencia Bolivariana para Actividades Espaciales</td>
          <td>Inactivo</td>
        </tr>
        <tr class="table-danger">
          <th scope="row">6</th>
          <td>FASat-Alfa</td>
          <td>Fuerza Aérea de Chile</td>
          <td>Inactivo</td>
        </tr>
        <tr class="table-danger">
          <th scope="row">7</th>
          <td>IK Bulgaria 1300</td>
          <td>Space Research and Technology Institute</td>
          <td>Inactivo</td>
        </tr>
        <tr class="table-danger">
          <th scope="row">8</th>
          <td>KazSat-1</td>
          <td>Khrunichev State Research and Production Space Center</td>
          <td>Inactivo(Se perdió control del mismo en 2008)</td>
        </tr>
        <tr class="table-danger">
          <th scope="row">9</th>
          <td>Morelos-1</td>
          <td>Grupo de Espacio y Comunicaciones de Hughes</td>
          <td>Inactivo(actualmente es basura espacial inubicable.)</td>
        </tr>
        <tr class="table-success">
          <th scope="row">10</th>
          <td>AO-73</td>
          <td>AMSAT-UK</td>
          <td>Activo</td>
        </tr>
        <tr class="table-success">
          <th scope="row">11</th>
          <td>EO-88</td>
          <td>Dubai Emirates Institution for Advanced Science and Technology (EIAST) en asocioación con American University of Sharjah (AUS)</td>
          <td>Activo</td>
        </tr>
        <tr class="table-success">
          <th scope="row">12</th>
          <td>UBAKUSAT</td>
          <td>ITU Space Systems Design And Testing Laboratory</td>
          <td>Activo</td>
        </tr>
        <tr class="table-success">
          <th scope="row">13</th>
          <td>Fox-1B</td>
          <td>Vanderbilt University, Radio Amateur Satellite Corporation</td>
          <td>Activo</td>
        </tr>
        <tr class="table-success">
          <th scope="row">14</th>
          <td>Starlink</td>
          <td>Elon Musk(SpaceX)</td>
          <td>Activo</td>
        </tr>
        <tr class="table-success">
          <th scope="row">15</th>
          <td>NovaSAR 1</td>
          <td>Surrey Satellite Technology Limited</td>
          <td>Activo</td>
        </tr>
        <tr class="table-danger">
          <th scope="row">16</th>
          <td>MOLNIYA 1-62</td>
          <td>Commonwealth of Independent States (former USSR)</td>
          <td>Inactivo</td>
        </tr>
        <tr class="table-success">
          <th scope="row">17</th>
          <td>CHEFsat 1</td>
          <td>Naval Research Lab (NRL)</td>
          <td>Activo</td>
        </tr>
        <tr class="table-danger">
          <th scope="row">18</th>
          <td>POPPY 5</td>
          <td>National Reconnaissance Office</td>
          <td>Inactivo</td>
        </tr>
        <tr class="table-danger">
          <th scope="row">19</th>
          <td>IRAS</td>
          <td> Estados Unidos (NASA), Países Bajos (NIVR) y el Reino Unido (SERC)</td>
          <td>Inactivo</td>
        </tr>
        <tr class="table-danger">
          <th scope="row">20</th>
          <td>Sputnik 1</td>
          <td>Serguéi Koroliov</td>
          <td>Inactivo</td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
