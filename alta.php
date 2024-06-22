<?php
//ini_set('display_errors',1);
include 'conexion.php';


if  ( ( isset($_POST['AgregarPhp'])) ) {

     extract($_POST);

    
    $sql="INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `correo`, `clave`, `dni`, `fechaNacimiento`, `telefono`, `direccion`, `provincia`, `cp`, `localidad`) VALUES (NULL, '$nombre', '$apellido', '$correo','$clave','$dni','$nacimiento','$tel','$direccion' ,'$provincia','$cp','$localidad')";
    
    $result=mysqli_query($conexion, $sql);
    
 
    header ('location: registro.php');


}
?>