
<?php require('secionAct.php')?>
<?php require('head.php')?>
<body>
    <?php require('header.php') ?>
    <?php require('nameId.php') ?>

    <main>
        
        <div class="container contenedor-formulario-php">
            <!-- Formularios de registro de usuarios  -->
             
            <form action="alta.php" method="post" enctype="multipart/form-data" name="form">
                <div class="datos-filiatorios-php">
                
                <legend>Datos Fiiatorios</legend>
                
                <div class="contenedor-foto-perfil-php">
                    <figure>
                        <img src="/imagenes/jean01.jpeg" alt="Foto de perfil" class="foto-perfil-php">
                    </figure>
                    <figcaption>Nombre Del Usuario</figcaption><br>
                    
                    
                    <label for="fotoPerfil">Foto Perfil : </label>
                    <input type="file" name="fotoPerfil" id="fotoPerfil"><br>
                </div>
                
                <div class="contenedor-identificatorio-php">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre">

                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido">

                    <label for="correo">Correo Electronico</label>
                    <input type="email" name="correo" id="correo">
                </div>

                <div>
                    <label for="clave">Contraseña</label>
                    <input type="password" name="clave" id="clave">

                </div>
                <br>
                <div class="contenedor-adicional-php">    
                    <label for="dni">Documento</label>
                    <input type="number" name="dni" id="dni">

                    <label for="nacimiento">Fecha de nacimiento</label>
                    <input type="date" name="nacimiento" id="id_nacimiento">
                
                    <label for="tel">Telefono</label>
                    <input type="tel" name="tel" id="id-tel">
                              
                </div>
<!-- Formularios direccion postal del usuarios  -->
                    <legend>Direccion</legend>
                    <div class="contenedor-direccion-php">
                                                
                        <label for="direccion">Direccion</label>
                        <input type="text" name="direccion" id="id_direccion"><br>
                
                        <label for="provincia">Provincia</label>
                        <select name="provincia" id="provincia">
                        <?php          
                        include 'recursosFunc.php';
                        selectorProvincias();
                        ?>
                        </select>              
                        <label for="cp">Codigo Postal</label>
                        <input type="number" name="cp" id="id_cp" style="width: 100px;>

                        <label for="localidad">Localidad</label>
                        <input type="text" name="localidad" id="id_localidad">
                    
                     
                </div> 
                
                <div class="container" style="display:flex; justify-content: space-around; ">
                    <button type="submit" class="btn-agregar-php" name="AgregarPhp" id ="idAgregar">Alta</button>
                    <button class="btn-agregar-php"><a href="plataformaAdmin.php" style="color:black;">Cancelar</a></button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>