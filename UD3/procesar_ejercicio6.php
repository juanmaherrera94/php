<!DOCTYPE html>
<html>
<head>
    <title>Imagen de Fruta</title>
    <link rel="stylesheet" type="text/css" href="ejercicios-formularios.css">

</head>

<body>
    <?php
    if (isset($_POST['fruta'])) {
        $frutaSeleccionada = $_POST['fruta'];

        echo "<h1>Has seleccionado $frutaSeleccionada</h1>";

        if ($frutaSeleccionada === 'manzana') {
            echo '<img src="img/frutas/manzana.svg" alt="Manzana" class="imagen">';
        } elseif ($frutaSeleccionada === 'platano') {
            echo '<img src="ruta/a/tus/imagenes/platano.jpg" alt="Plátano">';
        } elseif ($frutaSeleccionada === 'uva') {
            echo '<img src="ruta/a/tus/imagenes/uva.jpg" alt="Uva">';
        } elseif ($frutaSeleccionada === 'naranja') {
            echo '<img src="ruta/a/tus/imagenes/naranja.jpg" alt="Naranja">';
        } else {
            echo "<p>Fruta no válida</p>";
        }
    } else {
        echo "<p>No has seleccionado ninguna fruta</p>";
    }
    ?>
</body>
</html>