<?php
  include 'conexion.php';

  $n_archivo1 = $_FILES['foto1']['name'];
  $n_archivo2 = $_FILES['foto2']['name'];
  $n_archivo3 = $_FILES['foto3']['name'];

  $archivo1 = $_FILES['foto1']['tmp_name'];
  $archivo2 = $_FILES['foto2']['tmp_name'];
  $archivo3 = $_FILES['foto3']['tmp_name'];

  $ruta = "./imagenes/".
  $base_datos ="imagenes/".$n_archivo1;
  $base_datos2 ="imagenes/".$n_archivo2;
  $base_datos3 ="imagenes/".$n_archivo3;

?>