<?php
/**
Arrays ejercicio26.php*
@author Juanma Herrera
*/

$array_emotis = array(
    range(128512, 128580),
    range(129296, 129303),
    range(129312, 129327),
    range(129392, 129393),
    range(129395, 129398),
    range(129402, 129488)
);

$todosLosEmotes = array_merge(...$array_emotis);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Emoticonos  
    Arrays (1). Sin formularios.
    Juanma Herrera
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/ejercicios_arrays.css" title="Color">
</head>

<body>
  <h1>Todos los Emoticonos</h1>

  <p>Actualice la página para mostrar un nuevo emoticono seleccionado al azar.</p>
  <h2>
    <?php echo count($todosLosEmotes) . " emoticonos <br>"; ?>
  </h2>
  <?php
    foreach($todosLosEmotes as $unicode){
        echo "&#$unicode;";
    }    
  ?>

  <h2>Uno al azar</h2>
  <?php
    $indiceAleatorio = rand(0, count($todosLosEmotes) - 1);
    $emoticonoAleatorio = $todosLosEmotes[$indiceAleatorio];
    echo "&#$emoticonoAleatorio;";
  
  ?>

  <footer>
    <p>Juanma Herrera</p>
  </footer>
</body>
</html>