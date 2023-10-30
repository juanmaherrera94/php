<?php
session_start();

$valor = isset($_SESSION['numero']) ? $_SESSION['numero'] : 0;

if (isset($_POST['accion'])) {
    $accion = $_POST['accion'];
    if ($accion === 'Subir') {
        $valor++;
    } elseif ($accion === 'Bajar') {
        $valor--;
    } elseif ($accion === 'Poner a cero') {
        $valor = 0;
    }

    $_SESSION['numero'] = $valor;
}

header('Location: ejercicio16.php');
?>
