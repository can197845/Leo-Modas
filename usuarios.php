<?php require ('head.php'); ?>

<body>
    <?php  require ('header.php'); ?>
    <div class="container">
       <?php
           include ('conexion.php');

           $id=$_POST["id"];
           echo "Usuario ID= ".$id;
       ?>    
    </div>

</body>
</html>