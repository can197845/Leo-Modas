<?php require('head.php')?>

<body>
<!-- LLAMO A LA CABECERA ____________________________-->
<?php require('header.php') ?>

    <main class="contenedor-php">
        <div>
           <form action="ValidadorLogin.php" method="post"  enctype="multipart/form-data" name="form"> 
                
                <div class="contenedor-input-php">
                    <label for="usuario">USUARIO</label><br>
                    <input type="email" name="usuario" id="usuario" requerid>
                </div>
            
                <div class="contenedor-input-php">
                    <label for="clave">PASSWORD</label><br>
                    <input type="password"  name ="clave" requerid>
                </div>
             
                <div>
                    <button type="sunmit" id="btn-Ingresar" class="btn-ingresar-php">Ingresar</button>
                </div>
          </form>
        </div>
    </main>
</body>

</html>