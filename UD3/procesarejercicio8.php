<?php
function recoge($var) {
    $tmp ="";
    if (isset($_REQUEST[$var])) {
        $tmp = trim(htmlspecialchars($_REQUEST[$var]));
     }   
     return $tmp;
}
$nombre = recoge("nombre");
$apellidos = recoge("apellidos");

if(empty($nombre) || empty($apellidos)){
 echo "Los campos no pueden estar vacios";
}else{
    echo "Su nombre es $nombre y su apellido es $apellidos";
}
?>