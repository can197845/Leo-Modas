<?php

include 'conexion.php';
  
$u=$_POST['usuario'];
$p=md5($_POST['clave']);

$sql = "select * from usuario where correo ='".$u."' and clave='".$p."' and activo='1'";
$result = mysqli_query($conexion, $sql);
$rstlogin = mysqli_fetch_array($result);

if ($rstlogin){
    session_name('back');
				session_start();
			    $_SESSION['Usuario']   = $rstlogin['usuario'];	
				$_SESSION['IDUsuario'] = $rstlogin['id'];
			    $_SESSION['Nombre'] = $rstlogin['nombre'];	//$usu->ID;
			    				
				$_SESSION['is_logged'] = 1;
	if ($rstlogin['rol'] == '0'){
		header('Location: index.html');
		
		}else{
    		header ('location: plataformaAdmin.php');}
    exit();
}else{
    header('location: Login.php?mensaje=Usuario o password incorrecto');}

  ?>  