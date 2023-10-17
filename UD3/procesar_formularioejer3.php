<?php
$tienda1=0;
$tienda2=0;
$tienda3=0;
$tienda1=$_POST["tienda1"];
$tienda2=$_POST["tienda2"];
$tienda3=$_POST["tienda3"];


if(!is_numeric($tienda1) || !is_numeric($tienda2) || !is_numeric($tienda3)){
    echo "Por favor inserte datos numericos";
}else{
    $valorMedio=($tienda1+$tienda2+$tienda3)/3;

    echo "La media de los valores son: " . $valorMedio;
}