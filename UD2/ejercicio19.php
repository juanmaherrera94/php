<?php
/**
 
Arrays ejercicio19.php*
@author Juanma Herrera
*/


function tirarDado() {
    $dado = ["1", "2", "3", "4", "5", "6"];
    return $dado[array_rand($dado)];
}


function tirarNumDados($n) {
    $resultados = [];
    for ($i = 0; $i < $n; $i++) {
        $resultado = tirarDado();
        $resultados[] = $resultado;
    }
    return $resultados;
}

$numDados = rand(2, 7);
$resultados= tirarNumDados($numDados);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Tirada de Dados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ejercicios_arrays.css" title="Color">
</head>

<body>
    <h1>Tirada de Dados</h1>
    <p>Actualiza la página para realizar una nueva tirada.</p>
    <p>Tirada de dados: <?php echo $numDados; ?></p>
    <?php foreach ($resultados as $resultado) : ?>
    <img src="img/<?php echo $resultado; ?>.svg" alt="Dado">
    <?php endforeach; ?>
<footer>
    <h2> Resultado </h2>

     <h2> <?php 
        foreach ($resultados as $valor){
            echo $valor . " ";
        }
    ?> </h2>
    <h2> El valor mas alto es: </h2>
    <h2> <?php echo max($resultados);
    ?> </h2>
    <h2> El valor mas bajo es: </h2>
     <h2><?php echo min($resultados); 
    ?> </h2>
</footer>
</body>
</html>