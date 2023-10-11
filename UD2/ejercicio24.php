<?php
/**
Arrays ejercicio24.php*
@author Juanma Herrera
*/

$emoticono = rand(10, 20);
$array_emoticonos = [];

for ($i = 0; $i < $emoticono; $i++) {
    $array_emoticonos[] = rand(128512, 128580);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Buscar emoticono
    Arrays (1). Sin formularios.
    Juanma Herrera
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/ejercicios_arrays.css" title="Color">
</head>

<body>
  <h1>BUSCA EMOTICONO</h1>

  <p>Actualice la página para mostrar un nuevo grupo de emoticonos.</p>
  <h2>Emoticonos:</h2>
  
  <?php
  foreach ($array_emoticonos as $unicode) {
      echo "&#" . $unicode . "; ";
	  
  }
 
  ?>

  <?php
  $emoticono_a_buscar = rand(128512, 128580);
  $encontrado = in_array($emoticono_a_buscar, $array_emoticonos);
  
  if ($encontrado) {
      $mensaje = "El emoticono &#$emoticono_a_buscar; SÍ está entre ellos.";
  } else {
      $mensaje = "El emoticono &#$emoticono_a_buscar; NO está entre ellos.";
  }
  echo $mensaje;
  ?>

  <footer>
    <p>Juanma Herrera</p>
  </footer>
</body>
</html>
