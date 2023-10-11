<?php
$dinero = 7126;

$arr_dinero = array(500, 100, 50, 20, 10, 2, 1);

foreach ($arr_dinero as $valor) {

    $cantidades = floor($dinero / $valor);

 
    echo "Billetes/Monedas de $valor €: $cantidades <br>";

    $dinero = $dinero % $valor;
}
?>
Haz un programa que teniendo una variable con un numero de DNI
muestre la letra que corresponde a dicho DNI. Teniendo en cuenta que se obtiene asi_
Calculamos el resto de dvivir el numero de dni entre 23.