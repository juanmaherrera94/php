<?php
/**
 * @author Juanma Herrera
 */
$chico;
$chica;
$cartas=4;
$array_cartas=[];
for ($i=0;$i<$cartas;$i++){
    $array_cartas[]=rand(1,10);
    
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
   Juanma Herrera
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="juego-cartas-2.css" title="Color">
</head>

<body>
	<h1>Juego de cartas</h1>

	<p>Si las cuatro cartas tienen números distintos, gana la chica. 
		Si no, gana el chico. Actualice la página para mostrar otra partida.
	</p>

<?php
    foreach($array_cartas as $valores){
      echo '<img src="img/cartas/p' . $valores . '.svg" class="clase-imagen" alt="cartas">';
    }
?>
  <footer>
    <p>Juanma Herrera</p>
  </footer>
</body>
</html>
