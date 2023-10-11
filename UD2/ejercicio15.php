<?php

$numeroAleatorio = rand(1, 6);

    $caras=[
        1 => 'uno',
        2 => 'dos',
        3 => 'tres',
        4 => 'cuatro',
        5 => 'cinco',
        6 => 'seis'
    ];
$resultado=$caras[$numeroAleatorio];
echo "El numero que te ha salido es: $resultado";

?>