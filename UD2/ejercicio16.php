<?php
/**
 * Arrays ejercicio16.php
 *
 * @author Juanma Herrera
 *
 */

$caras=[1,2,3,4,5,6];
$tiradaAleatoria = $caras[array_rand($caras)];
$rutaImagen = "img/{$tiradaAleatoria}.svg";
$carasTexto=[
	1=>"Uno",
	2=>"Dos",
	3=>"Tres",
	4=>"Cuatro",
	5=>"Cinco",
	6=>"Seis"
	];
	?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dado.
    Arrays (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/ejercicios_arrays.css" title="Color">
</head>

<body>
  <h1>Dado</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

	<img src="<?php echo $rutaImagen; ?>" alt="Dado">


  <footer>
	<?php echo "Has sacado un " . $carasTexto[$tiradaAleatoria] ?>
  </footer>
</body>
</html>
