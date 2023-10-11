<?php

/**
 
Arrays ejercicio23.php*
@author Juanma Herrera
*/


$bolas= rand(5, 15);
$array_bolas= [];

for ($i = 0; $i < $bolas; $i++) {
    $array_bolas[$i]=rand(10102,10111);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Valores repetidos
    Arrays (1). Sin formularios.
    Juanma Herrera
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/ejercicios_arrays.css" title="Color">
</head>

<body>
  <h1>ELIMINA VALORES REPETIDOS</h1>

  <p>Actualice la página para mostrar un nuevo grupo de valores.</p>
  <h2> <?php echo "Entre estas " . $bolas . "bolas..." ?></h2>
  <br>
   <?php foreach ($array_bolas as $unicode){
        echo "&#" . $unicode;
    }
	?>
	<h2>
	<?php 
	$array_bolas=array_unique($array_bolas);
	$cantidad=count($array_bolas);
	echo "Hay " . $cantidad . "bolas distintas..."
	?>
	</h2>
    <?php foreach ($array_bolas as $unicode){
	  echo "&#" . $unicode;
		}
	?>
    
  <footer>
    <p>Juanma Herrera</p>
  </footer>
</body>
</html>