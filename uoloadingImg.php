<?php
 if ( isset($_POST['Enviar'])) {

    extract($_POST);
	
	if($_FILES['foto']['name'] != ""){

        // Primero, hay que validar que se trata de un JPG/GIF/PNG
        $allowedExts = array("jpg", "jpeg", "gif", "png", "JPG", "GIF", "PNG");
        $ext = explode(".", $_FILES["foto"]["name"]);
		$extension = end($ext);
		
        if ((($_FILES["foto"]["type"] == "image/gif")
        || ($_FILES["foto"]["type"] == "image/jpeg")
        || ($_FILES["foto"]["type"] == "image/png")
        || ($_FILES["foto"]["type"] == "image/pjpeg"))
        && in_array($extension, $allowedExts)) {
    
            // el archivo es un JPG/GIF/PNG, entonces...
        
        $extension = end(explode('.', $_FILES['foto']['name']));
        
        /* Aca se debe incluir un id de cada usuario ...*/
        
        $foto = $nombre.".".$extension;
        
        //$foto=$_FILES['foto']['name'];
	  	
        $directorio="uploads/";	

	    move_uploaded_file($_FILES['foto']['tmp_name'], $directorio.'/'.$foto);
                 
        } else { // El archivo no es JPG/GIF/PNG
            
           echo "No es un archivo de imagen";
        }
        //if($_FILES['imagen']['size']>1000000){
        
	}
}
?>
