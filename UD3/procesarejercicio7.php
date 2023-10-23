<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegir colores</title>
</head>
<body>
<?php
function recoge($var) {
    $tmp ="";
    if (isset($_REQUEST[$var])) {
        $tmp = trim(htmlspecialchars($_REQUEST[$var]));
     }   
     return $tmp;
}
$fondo = recoge("fondo");
$texto = recoge("texto");


echo "Se ha cambiado los colores <style>body { background-color: $fondo; color: $texto; }</style>\n";

?>
<br>
<br>
<a href="ejercicio7.html">Volver al menu</a>
</body>
</html>