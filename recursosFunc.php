<?php
function selectorProvincias(){
$provincias = ["Seleccionar Provincia","Buenos Aires","CABA","Catamarca","Chaco","Chubut","Cordoba", "Corrientes",
                "Entre Rios","Formosa","Jujuy","La Pampa","La Rioja","Mendoza","Misiones",
                "Neuquen","Rio Negro","Salta","San Juan","San Luis","Santa Cruz",
                "Santa Fe","Santiago del Estero","Tierra Del Fuego", "Tucumán"];

foreach ($provincias as $valor){
    echo "<option value='$valor'>$valor</option>";
}
}
function password_User_compare($clave){
    
    $auxClave = password_hash($clave, PASSWORD_DEFAULT)."\n";
    return $auxClave;
}

function seletor_CP(){
    
    require('conexion.php');    
    
    $sql="select * FROM provincias";
    $result=mysqli_query($conexion, $sql);
    extract($result);
    $row = mysqli_fetch_array($result);
    
    while ($row = mysqli_fetch_array($result)){
     $cp_array = array($row['cp']);
     }
    foreach ($cp_array as $valor){
        echo "<option value='$valor'>$valor</option>";
    }
}

//___________ Funciones de imagenes _____________________________________

function validador_img($imagen,$nombre_final, $ruta){
    if(isset($imagen)){ // Si se cargo $imagen
  
      // Primero, hay que validar que se trata de un JPG/GIF/PNG
      $formatos = array("jpg", "jpeg", "gif", "png");
      
      $nombre_archivo = $imagen['name'];  //Nombre del archivo
      $nombre_temporal = $imagen['tmp_name']; //Nombre temporal del archivo
  
      // Buscar la extension del archivo
      // strtolower, convierte la extencion a minusculas
      //pathinfo, obtiene informacion del archivo, PATHINFO_EXTENSION especifica la informacion que se necesita, en este caso la extension
      $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION)); 
      
      $nom = explode('.',$nombre_archivo);
      
      if (in_array($extension, $formatos)) // Buscame este $extension en esta lista $formatos
      {
        if (move_uploaded_file($nombre_temporal, $ruta .$nombre_final.$nom[0] . '.' . $extension)) // Se mueve la imagen a la ruta determinada, con el nombre seguido de la extension
        {   
          $ruta_archivo = $ruta.$nombre_final.$nom[0]. '.' . $extension;
          return $ruta_archivo;
        }
        else
        {
          return 'No se pudo guardar la imagen.';
        }
      }
      else
      {
        return 'No es una imagen valida.';
      }
    }
  }
// __________________ Validador de mails________________

function validador_mail($texto){
        
    $emails = explode("\n", $texto);
    
    // Verificar que cada línea sea un email
    foreach ($emails as $email) {
        // quito los posibles espacios antes y después de la cadena, para asegurarme que no falla por eso
        $email = trim($email);
        // compruebo la validez de cada email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // email validado correctamente
            echo $email . " es un email válido.<br>";
        } else {
            // la validación de email no ha sido buena
            echo $email . " no es un email válido.<br>";
        }
    }
}
// __________________ separador del usuario, del dominio de mails________________

function separador_mail($tipo,$texto ){
 
    // Paso 1: Capturar el correo electrónico
$email = $texto;

// Paso 2: Separar el correo electrónico
$partes = explode('@', $email);
// Paso 3: Uno los componentes separados generando usuario nuevo
$user =$tipo.$partes[0]; 

return $user;
}
//___________ Funcion de  Busque de un cmapo __________________

function user_find($campo,$btn,$name){
 /**La funcion user_find() busca el parametro que se le pasa.
  * function user_find($campo : String, $btn : String)
  $campo es el campo que se quiere buscar, la variable $btn es el name del button submit

  */
  include 'conexion.php';

  if (isset($_POST[$btn])){
  
      extract($_POST);
  
      $sql = "SELECT * FROM `usuario` WHERE '$name' LIKE '$campo'";

  
      $result = mysqli_query($conexion, $sql);
      $row = mysqli_fetch_array($result);
    
      return $row[$campo];
  }else{
      echo"<script> alert('no se encontro el campo indicado')</script>";
  }
}
?>