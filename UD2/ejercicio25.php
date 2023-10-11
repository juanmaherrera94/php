<?php
/**
Arrays ejercicio23.php*
@author Juanma Herrera
*/

$corazones = rand(7, 20);
$array_corazones = [];

for ($i = 0; $i < $corazones; $i++) {
    $array_corazones[$i] = rand(128147, 128152);
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
  <h1>Cuenta Corazones</h1>

  <p>Actualice la página para mostrar un nuevo grupo de valores.</p>
  <?php
  foreach ($array_corazones as $unicode) {
      echo "&#$unicode; ";
  }
  ?>
  
  <h2>Conteo</h2>

  
	<?php
    $conteo_corazones = array_count_values($array_corazones);
    $corazones_unicos = array_unique($array_corazones);

    foreach ($corazones_unicos as $unicode) {
        $cantidad = $conteo_corazones[$unicode];
        echo " &#$unicode $cantidad <br>";
    }
    ?>

  <footer>
    <p>Juanma Herrera</p>
  </footer>
</body>
</html>