<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Juego de Dados</title>
</head>
<body>
    <h1>Juego de Dados</h1>
    
    <?php
    $caras = [1, 2, 3, 4, 5, 6];
 
    // Lanzar el dado para el jugador 1
    $jugador1 = $caras[array_rand($caras)];

    // Lanzar el dado para el jugador 2
    $jugador2 = $caras[array_rand($caras)];

    // Mostrar los resultados de los lanzamientos
    echo '<p>&#x1f468; 👨 lanzó un dado y obtuvo: ' . $jugador1 . '</p>';
    echo '<p>&#x1f469; 👩 lanzó un dado y obtuvo: ' . $jugador2 . '</p>';

    // Determinar al ganador
    if ($jugador1 > $jugador2) {
        echo '<p>&#x1f468; 👨 es el ganador!</p>';
    } elseif ($jugador2 > $jugador1) {
        echo '<p>&#x1f469; 👩 es la ganadora!</p>';
    } else {
        echo '<p>¡Empate! Ambos jugadores obtuvieron el mismo valor más alto.</p>';
    }
    ?>
</body>
</html>
