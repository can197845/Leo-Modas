<?php require ('./layout/head.php'); ?>

<body>
    <?php  require ('./layout/header.php'); ?>
    <div class="container">
       <?php
           include ('../Modulos/conexion.php');

           $id=$_POST["id"];
           echo "Usuario ID= ".$id;
       ?>    
    </div>

</body>
</html>