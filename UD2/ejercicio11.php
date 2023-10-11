<?php

$numeroDNI = 53912379;

$letrasDNI = array("T","R","W","A","G","M","Y","F", "P"
					,"D","X","B","N","J","Z","S","Q","V","H","L",
					"C","K","E");
					
$resto = $numeroDNI % 23;


$letraDNI = $letrasDNI[$resto];

echo "El DNI $numeroDNI tiene la letra: $letraDNI";
?>