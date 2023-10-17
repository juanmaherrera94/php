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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Cálculo</title>
</head>
<body>
</body>
</html>
