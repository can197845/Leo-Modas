<?php require('./layout/head.php')?>
<body>
    <?php require('./layout/header.php')?>
    <div class="continer">
        <form action="" method="post">

            <div class="contenedor-articulos-php">
                <div>
                    <h4>Categoria</h4>
                    <select name="categoria" id="categoria">
                    <option value="Pantalon">Pantalon</option>
                    <option value="Remeras">Remeras</option>
                    <option value="Blusas">Blusas</option>
                    <option value="Pulovers">Pulovers</option>
                    <option value="Camperas">Camperas</option>
                </div><br>
            
                <div class="contenedor-nombreArt-php">
                    <h4 for="nombreArt">Articulo</h4>
                    <input type="text" id="nombreArt" name="nombreArt">
                </div>

                <div class="contenedor-detalleArt-php">
                    <label for="detalleArt">Detalle</label>
                    <textarea id="detalleArt" name="detalleArt"></textarea>
                </div>               
                
                <div>
                    <label for="precioArt">Precio</label>
                    <input type="number" id="precioArt" name="precioArt">
                </div>  
                
                <DIV>
                    <label for="cantArt">Cantidad </label>
                    <input type="number" id="cantArt" name="cantArt">
                </DIV>
                
                <div>
                    <h4>Talle de la Prenda</h4>
                    <select id="talleArt" name="talleArt">
                    <option value="0">Seleccione un talle</option>
                    <option value="S">S</option>
                    <option value="L">L</option>
                    <option value="M">M</option>
                    <option value="X">X</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </div>
                <!-- Contenedoor de los archivos para la imagenes -->    
                             
                <div class="contenedor-articulo-imagenes-php">
                    <h4>Subir Fotos descriptivas</h4>             
                    <div class="contenedor-articulo-file-php">
                        <input type="file" id="foto1" name="foto1">
                    </div>
                
                    <div class="contenedor-articulo-file-php">
                        <input type="file" id="foto2" name="foto3">
                    </div>
                
                    <div class="contenedor-articulo-file-php">
                        <input type="file" id="foto3" name="foto3">
                    </div>
                </div>
            
            </div>

        </form>
    </div>
    
</body>