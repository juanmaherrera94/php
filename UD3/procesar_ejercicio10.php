<?php
$sexo = $_POST["sexo"];
$aficciones= $_POST["aficcion"];
if(empty($sexo)){
   echo "No has seleccionado ninguna opción de sexo";
}else{
    echo "Tu sexo es: $sexo";
    echo ("<br>");
}
if(empty($aficciones)){
    echo "No has seleccionado ninguna aficion";
}else{
    foreach ($aficciones as $aficcion) {
       echo "Las aficiones que has cogido son $aficcion";
       echo ("<br>");
    };
}