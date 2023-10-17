<?php
$tamanio=0;
$tamanio=$_POST["tamanio"];

if(!is_numeric($tamanio)){
    echo "No es valido el valor introducido";
}

if($tamanio>0){
    echo "<svg width='${tamanio}' height='${tamanio}' viewBox='0 0 ${tamanio} ${tamanio}'>
    <rect x='0' y='0' width='${tamanio}' height='${tamanio}' fill='white' stroke='black' stroke-width='4' />
    </svg>";
}else{
    echo "El tamaño del cuadrado debe ser positivo";
}
?>
