<?php
$altura = 0;
$diametro = 0;
$altura = $_POST["altura"];
$diametro = $_POST["diametro"];
if (!is_numeric($altura) || !is_numeric($diametro)) { 
    echo "Por favor inserta datos numéricos";
} else {
    $radio = $diametro / 2;
    $volumen = pi() * pow($radio, 2) * $altura; 
    echo "El volumen del cilindro es: " . $volumen;
}
?>