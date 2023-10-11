<?php

$num1=$_GET["numero1"];
$num2=$_Get["numero2"];
$suma=$num1+$num2;

/**
 * 
@author Juanma Herrera
*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Juanma Herrera
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/ejercicios_arrays.css" title="Color">
</head>

<body>
  <h1>SUMA DE DOS NUMEROS</h1>
  <?php 
        echo "El resultado de sumar" . $num1 . "+" .$num2 . "es:" . $suma;?>
  <footer>
    <p>Juanma Herrera</p>
  </footer>
</body>
</html>