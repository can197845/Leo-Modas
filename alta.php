<?php
//ini_set('display_errors',1);
include 'conexion.php';
include 'secionAct.php';

if  ( ( isset($_POST['Alta'])) ) {

     extract($_POST);

       
   
    $sql="INSERT INTO `usuario`(`id_usuario`, `nombre`, `apellido`, `correo`, `fotoPerfil`, `clave`, `documento`, `fechaNacimiento`, `telefono`, `direccion`, `provincia`, `cp`, `localidad`, `activo`) 
    VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]')";
    
    $result=mysqli_query($conexion, $sql);
 
    header ('location: registro.php');


}
?>