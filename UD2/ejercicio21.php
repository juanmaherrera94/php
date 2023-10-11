<?php

/**
 
Arrays ejercicio21.php*
@author Juanma Herrera
*/

$grupoAnimales = [];
$numAnimales = rand(20, 30);

for ($i = 0; $i < $numAnimales; $i++) {
    $grupoAnimales[$i]=rand(128000,128060);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Elimina un animal.
    Arrays (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/ejercicios_arrays.css" title="Color">
</head>

<body>
  <h1>Elimina un animal</h1>

  <p>Actualice la página para mostrar un nuevo grupo de animales.</p>
  <h2> <?php echo $numAnimales ?> animales</h2>
  <br>
   <?php foreach ($grupoAnimales as $unicode){
        echo "&#" . $unicode;
    }
	$i_aleatorio = array_rand($grupoAnimales); 
    $animal_aleatorio = $grupoAnimales[$i_aleatorio]; 
	?>
  <h2>Animal a eliminar</h2>
    <h2> <?php  echo "&#" . $animal_aleatorio;?></h2>
    <h2> Quedan <?php echo $i ?> animales </h2>
	<?php 
    $array_animales_final = [];
    foreach ($grupoAnimales as $unicode){
        if ($unicode <> $animal_aleatorio){
            $array_animales_final[] = $unicode;
        }
    }
    ?>
    <?php
    foreach ($array_animales_final as $unicode){
        echo "&#" . $unicode;
    }
    ?>
  <footer>
    <p>Juanma Herrera</p>
  </footer>
</body>
</html>
