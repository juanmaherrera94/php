<?php

$jugador=array("Crovic","Antic","Malic","Zulic","Rostrich");

$frase = "La alineación del equipo está compuesta por " . implode(", ", $jugador) . ".";

echo $frase;

$ultimaComa = strrpos($frase, ",");

?>