<?php
//ini_set('display_errors',1);
include 'conexion.php';
include 'secionAct.php';
include 'recursosFunc.php';

if  (isset($_POST['AgregarPhp'])) {

  extract($_POST);

  $nom_img = separador_mail("USER_",$_POST['correo']);
  
  $clave = md5($_POST['clave']);
  
  $imagen = validador_img($_FILES['fotoPerfil'],$nom_img, "uploads/");

  // Guardamos la ruta obtenida por el validor de imagen y la guardamos en $imagen
  $fotoPerfil = $imagen;

  // Armamos el comando sql para grabar la base de datos
  $sql="INSERT INTO usuario (id_usuario, nombre, apellido, correo,fotoPerfil, clave, dni, fechaNacimiento, telefono, direccion, provincia, cp, localidad) VALUES (NULL, '$nombre', '$apellido', '$correo','$fotoPerfil','$clave','$dni','$nacimiento','$tel','$direccion' ,'$provincia','$cp','$localidad')";

  $result = mysqli_query($conexion, $sql);
  if ($_SESSION[['is_logged'] == 1]){
      header ('location: registroAdmin.php');
  }else{
      header ('location: registroUser.php');
  }
}
?>