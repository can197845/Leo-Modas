<?php 
session_name('back');
session_start();

if(isset($_SESSION['Nombre'])){
    $_SESSION['is_logged'] = 1;
}else{
    header('location: registroUser.php');
}
?>
