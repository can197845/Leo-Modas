<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Imagenes</title>
    </head>

<body>
        
       
       
        <section  >
            
                    <h2 class="text-center">ARCHIVOS</h2>
                    
                    <form action="uoloadingImg.php" method="post" enctype="multipart/form-data" name="images-form" >
                        
                            <p>
                                <input name="nombre" id="nombre" type="text" placeholder="Nombre">
                                <label for="nombre">Nombre</label>
                            </p>
                           
                        <p >
                            
                                <input name="foto" id="Foto" type="file" placeholder="Foto" >
                                <label for="Foto">Foto</label>
                          
                        </p>
                        
                        <div >
                            <div >
                               
                                 <p>
                                    <button type="submit" name="Enviar">Enviar</button>
                                </p>
                            </div>
                        </div>
                    </form>
                     
               
        </section>
   
    <footer>
      
    </footer>
    
    
</body>

</html>