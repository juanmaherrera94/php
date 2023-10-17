<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tipo_vivienda = $_POST['tipo_vivienda'];
        $zona = $_POST['zona'];
        $direccion = $_POST['direccion'];        
        $num_dormitorios = $_POST['num_dormitorios'];
        $precio = $_POST['precio'];
        $tamanio = $_POST['tamanio'];
        $extras = isset($_POST['extras']) ? $_POST['extras'] : array();
        $observaciones = $_POST['observaciones'];
        echo "Tipo: " . $tipo_vivienda ."<br>";
        echo "Zona: " . $zona . "<br>";
        echo "Dirección: " . $direccion . "<br>";
        echo "Número de Dormitorios: " . $num_dormitorios . "<br>";
        echo "Precio: " . $precio . "<br>";
        echo "Tamaño: " . $tamanio . "<br>";
        
        if (!empty($extras)) {
            echo "Extras: " . implode(", ", $extras) . "<br>";
        } else {
            echo "Extras: No se seleccionaron extras.<br>";
        }
        echo "Observaciones: " . $observaciones;
    } else {
        echo "No se enviaron datos desde el formulario.";
    }
    ?>