<!DOCTYPE html>
<html>
<head>
    <title>Imagen de Fruta</title>
    <link rel="stylesheet" type="text/css" href="ejercicios-formularios.css">

</head>

<body>
    <p>Esta es su fruta favorita:</p>
    <br>
    <?php
    if (isset($_POST['fruta'])) {
        $frutaSeleccionada = $_POST['fruta'];
        if ($frutaSeleccionada === 'manzana') {
            echo '<img src="img/frutas/manzana.svg" alt="Manzana" class="imagen">';
        } elseif ($frutaSeleccionada === 'cereza') {
            echo '<img src="img/frutas/cerezas.svg" alt="Cereza" class="imagen">';
        } elseif ($frutaSeleccionada === 'fresa') {
            echo '<img src="img/frutas/fresa.svg" alt="Fresa" class="imagen">';
        } elseif ($frutaSeleccionada === 'limon') {
            echo '<img src="img/frutas/limon.svg" alt="Limon" class="imagen">';
        } elseif ($frutaSeleccionada=== 'naranja') {
            echo '<img src="img/frutas/naranja.svg" alt="Naranja" class="imagen">';
        }elseif($frutaSeleccionada=== 'pera'){
            echo '<img src="img/frutas/pera.svg" alt="Pera" class="imagen">';
        }else {
            echo "<p>Fruta no válida</p>";
        }
    } else {
        echo "<p>No has seleccionado ninguna fruta</p>";
    }
    ?>
    <p><a href="ejercicio6.html">Volver al formulario</a></p>
</body>
</html>