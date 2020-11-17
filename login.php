<?php
  include("conexion.php");

  $correo = $_POST['correo'];
  $pwd = $_POST['pwd'];

  $validacion;

  $query = mysqli_query($conexion,"SELECT * FROM usuario WHERE correo = '".$correo."' AND pwd = '".$pwd."'");

  $resultado = mysqli_num_rows($query);

  if($resultado == 1){
      header("Location: index.php");
  }
  else{
      $validacion = "Nombre de usuario y/o contraseña incorrectos";
      header("Location: error.php");
  }
 ?>
