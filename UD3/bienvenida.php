<?php
// Inicia la sesión
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    // Si el usuario no ha iniciado sesión, redirige de nuevo al formulario de inicio de sesión
    header('Location: ejercicio15.html');
    exit();
}

// Si el usuario ha iniciado sesión, muestra la página de bienvenida
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
</head>
<body>
    <h2>Bienvenido, <?php echo $_SESSION['usuario']; ?></h2>
    <a href="cerrar_sesion.php">Cerrar Sesión</a>
    <br>
    <a href="ejercicio15.html">Volver al inicio de sesión</a>
</body>
</html>
