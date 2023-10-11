<?php
/**
 
Arrays ejercicio17.php*
@author Juanma Herrera
**/
$arr_animales=[
  "ballena","caballito-de-mar","camello","cebra","elefante","hipopotamo","jirafa","leon","leopardo","medusa","mono","oso",
  "oso-blanco","pajaro","pinguino","rinoceronte","serpiente","tigre","tortuga","tortuga-marina"
  ];
  $nombreAnimalAleatorio = $arr_animales[array_rand($arr_animales)];
  $rutaImagen = "img/animales/{$nombreAnimalAleatorio}.svg"
  
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Animales.
    Ejercicio 17. Sin formularios.
    Juanma Herrera
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/ejercicios_arrays.css" title="Color">
</head>

<body>
  <h1>Animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

	<h1><?php echo $nombreAnimalAleatorio; ?></h1>
	<img src="<?php echo $rutaImagen; ?>" alt="Animal">

  <footer>
    <p>Juanma Herrera</p>
  </footer>
</body>
</html>