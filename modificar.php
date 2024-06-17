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
       
        <section  class="container" >
                    <?php 
                     $id=$_POST["id"];
                     
                     $sql="select * from usuario where id_usuario='$id'";
                     $result=mysqli_query($conexion, $sql);
                     $row = mysqli_fetch_array($result);
                    ?>
 
                    <form action="modificar.php" method="post" enctype="multipart/form-data" name="contact-form" >
                        
                        <div class="row gx-2">
                            <div class="form-floating col-md mb-3">
                                <input name="nombre" id="nombreOrador" type="text" class="form-control" value="<?php echo $row["nombre"] ?>" aria-label="Nombre" required>
                               
                                <input name="id" type="hidden"  value="<?php echo $row["id"] ?>" >
                                <label for="nombreOrador">Nombre</label>
                            </div>
                            <div class="form-floating col-md mb-3">
                                <input name="apellido" id="apellidoOrador" type="text" class="form-control" value="<?php echo $row["apellido"] ?>" aria-label="Apellido" required>
                                <label for="apellidoOrador">Apellido</label>
                            </div>
                        </div>
                        <div class="row gx-2">
                            <div class="form-floating col-md mb-3">
                                <input name="email" id="correoOrador" type="email" class="form-control" value="<?php echo $row["email"] ?>"required>
                                <label for="correoOrador">Correo</label>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col mb-3">
                                <textarea name="tema" class="form-control" id="exampleFormControlTextarea1" rows="4"
                                 required><?php echo $row["tema"] ?></textarea>
                                <div id="emailHelp" class="form-text mb-3">Recuerda incluir un título para tu charla.</div>
                                 <div class="d-grid">
                                    <button type="submit" name="Modificar" class="btn btn-success btn-lg btn-form">Modificar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                      <a href="index.php">Volver</a>
                </div>
            </div>
        </section>
    </main>
        
</body>

</html>

