<?php
/**
Arrays ejercicio22.php*
@author Juanma Herrera
*/
$cartas = rand(5, 10);
function generarCarta()
{
    $valores = array("t1", "t2", "t3", "t4", "t5", "t6", "t7", "t8", "t9", "t10");
    return $valores[array_rand($valores)];
}

$cartasGeneradas = array();

for ($i = 0; $i < $cartas; $i++) {
    $carta = generarCarta();
    $cartasGeneradas[] = $carta;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>La carta mas alta. Arrays (1). Sin formularios. Juanma Herrera.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ejercicios_arrays.css" title="Color">
</head>

<body>
<h1>LAS CARTAS MAS ALTA</h1>
<?php echo "Cartas " . $cartas; ?>
<br>
	<?php foreach ($cartasGeneradas as $cartaGenerada): ?> 
	<img src="img/<?php echo $cartaGenerada; ?>.svg" alt="Carta" width="100px" heigh="100px">
	<?php endforeach;?>
	<br>			
<?php
$cartaMasAlta = max($cartasGeneradas);
echo "La carta más alta es un " . $cartaMasAlta;

?>
</h2>

<p>Actualice la página para mostrar un nuevo grupo de cartas.</p>

<footer>
    <p>Juanma Herrera</p>
</footer>
</body>
</html>