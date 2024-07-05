<?php

//ini_set('display_errors',1);
include 'conexion.php';

if  ( ( isset($_POST['Modificar'])) ) {

    

     extract($_POST);

       
   
    $sql="Update oradores set  nombre='$nombre', 
                               apellido='$apellido', 
                               email='$email', 
                               tema='$tema'
                               where id='$id'";
    
        
    $result=mysqli_query($conexion, $sql);

}
?>

<?php require ('head.php')?>

<body>
    <?php require ('header.php')?>
    <main>
    
    </main>
        
</body>

</html>

