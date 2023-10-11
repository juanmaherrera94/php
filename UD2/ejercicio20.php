<?php
/**
 * Arrays ejercicio20.php
 *
 * @author Juanma Herrera
 *
 */
$numero_tiradas = rand(2, 7);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Partida de dados.
    Arrays (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/ejercicios_arrays.css" title="Color">
</head>

<body>
  <h1>Partida de dados</h1>

  <p>Actualice la página para mostrar una nueva partida de dados.</p>

  <h2>Se van a hacer <?php echo $numero_tiradas; ?> tiradas.</h2>
  <?php
  $ganadas1 = 0;
  $ganadas2 = 0;
  $empatadas = 0;
  $tiradas1 = [];
  $tiradas2 = [];
  for ($i = 1; $i <= $numero_tiradas; $i++) {
    $jugador1 = rand(1, 6);
    $tiradas1[] = $jugador1;
    $jugador2 = rand(1, 6);
    $tiradas2[] = $jugador2;

    if ($jugador1 > $jugador2) {
      $ganadas1++;
    } else if ($jugador2 > $jugador1) {
      $ganadas2++;
    } else {
      $empatadas++;
    }
  }

  if ($ganadas1 > $ganadas2) {
    $ganador = "En conjunto ha ganado el jugador 1.";
  } else if ($ganadas2 > $ganadas1) {
    $ganador = "En conjunto ha ganado el jugador 2.";
  } else {
    $ganador = "Han ganado el mismo número de partidas.";
  }
  ?>
  <h2>Jugador 1</h2>
  <?php
  foreach ($tiradas1 as $tirada) {
    echo '<img src="img/' . $tirada . '.svg">';
  }
  ?>

  <h2>Jugador 2</h2>
  <?php
  foreach ($tiradas2 as $tirada) {
    echo '<img src="img/' . $tirada . '.svg">';
  }
  ?>

  <h2>Resultado</h2>
  <p>
    El jugador 1 ha ganado <?php echo $ganadas1; ?> veces,
    el jugador 2 ha ganado <?php echo $ganadas2; ?> veces y los
    jugadores han empatado <?php echo $empatadas; ?> veces.
  </p>
  <p> <?php echo $ganador; ?></p>

  <footer>
    <p>Juanma Herrera</p>
  </footer>
</body>
</html>
