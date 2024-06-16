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
function password_User_compare($clave,$auxClave){
    
    $auxClave = password_hash($clave, PASSWORD_DEFAULT)."\n";
    return $auxClave;
}
?>