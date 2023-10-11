<?php

function calcularPoligono($tipo, $base, $altura = null) {
    if ($tipo === "triangulo") {
        $area = $base * $altura / 2;
        echo "El area del triangulo es: $area\n";
    } else if ($tipo === "cuadrado") {
        $area = $base * $base;
        echo "El area de un cuadrado es: $area\n";
    } else if ($tipo === "rectangulo") {
        $area = $base * $altura;
        echo "El area de un rectangulo es: $area\n";
    } else {
        echo "Esto no es un polígono\n";
    }
    return $area;
}
$trianguloArea = calcularPoligono("triangulo", 5, 10);
$cuadradoArea = calcularPoligono("cuadrado", 4);
$rectanguloArea = calcularPoligono("rectangulo",6, 8);
?>