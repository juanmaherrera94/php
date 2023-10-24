<?php
$edad = $_POST["edad"];
$peso = $_POST["peso"];
$mensaje1 = "";
$mensaje2 = "";
$mensaje3 = "";
$mensaje4 = "";
$mensaje5 = "";

if (empty($edad)) {
    $mensaje1 = "El campo edad no puede estar vacio";
} elseif (!is_numeric($edad)) {
    $mensaje2 = "No es un numero";
} elseif ($edad <= 0 || $edad < 5 || $edad > 130) {
    $mensaje3 = "El numero no es positivo o no esta comprendido entre 5 y 130";
}else{
   echo "Tu edad es: $edad\n";
}

if (empty($peso)) {
    $mensaje4 = "El campo peso esta vacio";
} elseif ($peso < 10 || $peso > 150) {
    $mensaje5 = "El numero no esta comprendido entre 10 y 150";
}else{
   echo "Tu peso es: $peso";
}

if (!empty($mensaje1)) {
    echo $mensaje1 . "<br>";
}
if (!empty($mensaje2)) {
    echo $mensaje2 . "<br>";
}
if (!empty($mensaje3)) {
    echo $mensaje3 . "<br>";
}
if (!empty($mensaje4)) {
    echo $mensaje4 . "<br>";
}
if (!empty($mensaje5)) {
    echo $mensaje5 . "<br>";
}
?>

