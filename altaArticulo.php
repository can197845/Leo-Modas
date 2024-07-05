<?php
//ini_set('display_errors',1);
include 'conexion.php';
include 'secionAct.php';
include 'recursosFunc.php';

if  ( ( isset($_POST['alta'])) ) {

     extract($_POST);
    
     # _____ Colocacion del nombre ______________________
     
     $cat = ['PANT_','PULO_','REME__','BLUS_','CAMP'];
     
     # Creamos un case para discriminar el tipo de categoria para unirlo en el nombre del archivo
     
     case
     $nombre = $cat[$tipo] . $nombre;
     # _________________________________________________


    # __________ Validamos las imagenes ingresadas _____________________

    $img1= validador_img($_FILES['fotoArt1'],$nom_img1,"uploads/");
    $img2= validador_img($_FILES['fotoArt2'],$nom_img2,"uploads/");
    $img3= validador_img($_FILES['fotoArt3'],$nom_img3,"uploads/");

    $sql="INSERT INTO `articulo` (`id_articulo`, `id_categoria`, `nombreArt`, `detalleArt`, `precioArt`, `cantArt`, `talleArt`, `fotoArt1`, `fotoArt2`, `fotoArt3`) 
    VALUES (NULL, $nombreArt,  $detalleArt,$id_categoria , $precioArt, $cantArt, $talleArt, $fotoArt1,$fotoArt2, $fotoArt3)";
    $result=mysqli_query($conexion, $sql);
    
   
    $result = mysqli_query($conexion, $sql);
    
    header('location: ingresoArticulo.php');

}
?>