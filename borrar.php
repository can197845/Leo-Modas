<?php
     include 'conexion.php';
     $id = $_REQUEST['id_usuario'];

     // Preparar y ejecutar la consulta de forma segura
     $stmt = $conexion->prepare("DELETE FROM `usuario` WHERE id_usuario=?");
     $stmt->bind_param("i", $id); // "i" indica que el parámetro es un entero
     $resultado = $stmt->execute();
    
    if($resultado){
        echo "<script language='JavaScript'>
            alert('Usuario eliminado correctamente de la Base de Datos');
            location.assign('USER_busqueda.php');
            </script>";
        }else{
            echo "<script language='JavaScript'>
            alert('Usuario NO SE ELIMINO de la Base de Datos');
            location.assign('USER_busqueda.php');
            </script>";
            }
     
?>
