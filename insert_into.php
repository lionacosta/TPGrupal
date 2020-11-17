<?php
include("conexion.php");

 $nombre = $_POST['nombre'];
 $pwd = $_POST['pwd'];
 $correo = $_POST['correo'];

$consulta_slq = "INSERT INTO usuario(nombre,pwd,correo) VALUES ('$nombre','$pwd','$correo')";

$envio_consulta = $conexion->query($consulta_slq);

header("Location: index.php");
 ?>
