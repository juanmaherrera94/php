<?php
$sexo = $_POST["sexo"];
$aficcion[] = $_POST["aficcion"];

if(empty($sexo)){
    $mensaje1 = "No has seleccionado ninguna opción de sexo";
}else{
    $mensaje2 = "Tu sexo es: $sexo";
}

if(empty($aficcion)){
    $mensaje3 = "No has seleccionado ninguna afición";
}else{
    $mensaje4 = "Las aficiones que has elegido son: $aficcion";
}

if(!empty($sexo)){
    echo $mensaje2;
}else{
    echo $mensaje1;
}

if(!empty($aficcion)){
    echo $mensaje4;
}else{
    echo $mensaje3;
}
?>