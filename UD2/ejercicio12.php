<?php
function calcularPotencia($base, $exponente = 2) {
    return pow($base, $exponente);
}
$base = 8;
$exponente = 4;
$resultado = calcularPotencia($base, $exponente);
echo "El resultado de $base elevado a $exponente es $resultado";
?>