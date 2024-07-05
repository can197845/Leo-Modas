<?php
include './recursosFunc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
            $correo = "cane@gmail.com";
            $user = separador_mail($correo);
            echo $user;
        ?>
    <div>
        <form action="" method="post" enctype="multipart/form-data" name="form"">
        <input type="file" name="fotoPerfil">
        <button type="submit">enviar</button>
    
    <?php
            if (isset($_FILES['fotoPerfil'])) {
            
                $prueba = validador_img($_FILES['fotoPerfil'],$user."PERSO","");
            

                
                echo "<script> alert('es una imagen')</script>";
                echo $prueba;
                }else{
                    echo "<script> alert('no es una imagen)</script>";
                }
                
        ?>
    

    </form>
    </div>
</body>

</html>