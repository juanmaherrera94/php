<?php
// Inicia la sesión
session_start();

// Destruye todas las variables de sesión
session_destroy();

// Redirige al formulario de inicio de sesión
header('Location: ejercicio15.html');
?>