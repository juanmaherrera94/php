<?php
/**
 * @author Juanma Herrera
 */
$jugadorPicas;
$jugadorCorazones;
$puntosPicas = 0;
$puntosCorazones = 0;
$resultado1;
$resultado2;
$array_picas = [];
$array_corazones = [];

for ($i = 1; $i <= 9; $i++) {
    $array_picas[] = rand(1, 9);
}

for ($i = 1; $i <= 9; $i++) {
    $array_corazones[] = rand(1, 9);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>
        Juego de cartas.
        Escriba aquí su nombre
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos-examen.css" type="text/css">
</head>

<body>
<h1>Juego de cartas</h1>

<p>Actualice la página para ver una nueva partida. Una vez ordenadas las cartas, se comparan las cartas una a una y el jugador que tiene la de mayor valor gana dos puntos (en caso de empate, cada jugador gana un punto).</p>

<h2>Cartas de cada jugador</h2>
<?php
foreach ($array_picas as $valor) {
    echo '<img src="img/p' . $valor . '.svg" class="clase-imagen">';
}
?>
<br>
<br>
<?php
foreach ($array_corazones as $valor) {
    echo '<img src="img/c' . $valor . '.svg" class="clase-imagen">';
}
?>

<h2>Cartas ordenadas de cada jugador y puntuación</h2>

<?php
rsort($array_corazones);
rsort($array_picas);
for ($i = 0; $i < count($array_corazones); $i++) {

    if ($array_corazones[$i] > $array_picas[$i]) {
        $puntosCorazones += 2;
    } else if ($array_corazones[$i] < $array_picas[$i]) {
        $puntosPicas += 2;
    } else {
        $puntosPicas++;
        $puntosCorazones++;
    }
}



foreach ($array_picas as $valor) {
    echo '<img src="img/p' . $valor . '.svg" class="clase-imagen">';
}
echo $puntosPicas;

?>
<br>
<br>
<?php
foreach ($array_corazones as $valor) {
    echo '<img src="img/c' . $valor . '.svg" class="clase-imagen">';
}
echo $puntosCorazones;
?>
<footer>
    <p>Juanma Herrera</p>
</footer>
</body>
</html>
