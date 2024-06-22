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

?>