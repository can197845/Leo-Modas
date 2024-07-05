<?php
include 'conexion.php';
?>
<?php
include 'head.php';
?>
<body>
<?php include 'header.php';?>
<main>
    <!--___________________ Seccion de Busqueda __________________________-->

    <section style="display:flex; justify-content: center;; flex-direction:column; align-items: center;">
    <div style="text-algin: center; padding:10px;">
        <h5>Busqueeda de Usuario</h5>
    </div>
        <div>
            <form action="USER_busqueda.php" method="post" enctype="multipart/form-data">
            
                <label for="busqueda">Buscar Usuario: </label>
                <input type="text" name="busqueda" placeholder="Apellido de usuario" style="width: 350px;" required>
            
                <div>
                    <button type="submit" name="buscar" style="width: 200px;margin:10px; border-radius:5px;"> Buscar</button>       
                    <button style="width: 200px;margin:10px; border-radius:5px;">
                        <a href="plataformAdmin.php" style="color:black;">Menu Principal</a>
                    </button>
                    <button style="width: 200px;margin:10px; border-radius:5px;">
                        <a href="USER_busqueda.php" style="color:black;"><i class="bi bi-arrow-clockwise"></i> Recargar</a>
                    </button>
                </div>
                <div>
                    
                </div>
            </form>
        </div>
    </section>
    <section>
        <div class="container">
            <!-- Cabecera de la tabla de usuarios -->
            <table class="table caption-top table-responsive-sm">
            <caption><strong>Listado de Usuarios</strong></caption>
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>DNI</th>
                        <th>Fech. Naci.</th>
                        <th>Cod.</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Provincia</th>
                        <th>cp</th>
                        <th>Localidad</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    
                       <?php
                       if (isset($_POST['buscar'])) {
                            
                        // Buscar Apellido

                        $busqueda = $_POST['busqueda'];
                        // ponemos una condicion por si la busqueda se inicia vacia
                        if (empty($_POST['busqueda'])) {
                            echo "<script>alert('Debe ingresar un apellido para buscar')</script>";
                            echo "<script>window.location='USER_busqueda.php'</script>";
                            } 
                            else 
                            {
                                $sql = "SELECT * FROM usuario WHERE apellido LIKE '%$busqueda%'";
                                $resultado = mysqli_query($conexion, $sql);
                                while ($fila = mysqli_fetch_array($resultado)) {
                                    ?>
                                <tr>
                                    <td><?php echo $fila['id_usuario']; ?></td>
                                    <td><?php echo $fila['nombre']; ?></td>
                                    <td><?php echo $fila['apellido']; ?></td>
                                    <td><?php echo $fila['correo']; ?></td>
                                    <td><?php echo $fila['dni']; ?></td>
                                    <td><?php echo $fila['fechaNacimiento']; ?></td>
                                    <td><?php echo $fila['cod']; ?></td>
                                    <td><?php echo $fila['telefono']; ?></td>
                                    <td><?php echo $fila['direccion']; ?></td>
                                    <td><?php echo $fila['provincia']; ?></td>
                                    <td><?php echo $fila['cp']; ?></td>
                                    <td><?php echo $fila['localidad']; ?></td>
                                    <td> 
                                        
                                            <a href="modificar.php?id_usuario=<?php $fila['id_usuario']?>">
                                                <i class="bi bi-pencil-square" style="padding:2px; margin:5px;"></i>
                                            </a>
                                            <a href="borrar.php?id_usuario=<?= $fila['id_usuario']?>">

                                                 <i class="bi bi-trash" style="padding:2px; margin:5px;"></i>
                                            </a>
                                            </button>

                                        
                                    </td>
                                    
                                </tr>
                        
                                <?php   
                            }
                        }
                       }else{
                          
                        // Seleccionamos a todos los usuarios para mostrarlos
                        
                            $sql = "SELECT * FROM `usuario`";
                            $resultado= mysqli_query($conexion, $sql);
                            while ($fila = mysqli_fetch_array($resultado)) {
                                ?>
                                
                                <tr>
                                    <td><?php echo $fila['id_usuario']; ?></td>
                                    <td><?php echo $fila['nombre']; ?></td>
                                    <td><?php echo $fila['apellido']; ?></td>
                                    <td><?php echo $fila['correo']; ?></td>
                                    <td><?php echo $fila['dni']; ?></td>
                                    <td><?php echo $fila['fechaNacimiento']; ?></td>
                                    <td><?php echo $fila['cod']; ?></td>
                                    <td><?php echo $fila['telefono']; ?></td>
                                    <td><?php echo $fila['direccion']; ?></td>
                                    <td><?php echo $fila['provincia']; ?></td>
                                    <td><?php echo $fila['cp']; ?></td>
                                    <td><?php echo $fila['localidad']; ?></td>
                                    
                                </tr>
                                <?php
                            }
                       }
                        ?>
                </tbody> 
            </table>
        </div>
    </section>
</main>
</body>
</html>