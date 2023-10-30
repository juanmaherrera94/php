<?php
// Inicia la sesión
session_start();

// Define las credenciales correctas
$usuarioCorrecto = "usuario";
$contrasenaCorrecta = "12345";

// Obtiene las credenciales ingresadas por el usuario
$usuarioIngresado = $_POST['usuario'];
$contrasenaIngresada = $_POST['contrasena'];

// Verifica las credenciales
if ($usuarioIngresado == $usuarioCorrecto && $contrasenaIngresada == $contrasenaCorrecta) {
    // Credenciales válidas, crea una variable de sesión para indicar que el usuario ha iniciado sesión
    $_SESSION['usuario'] = $usuarioCorrecto;
    header('Location: bienvenida.php');
} else {
    // Credenciales incorrectas, redirige de nuevo al formulario de inicio de sesión
    header('Location: ejercicio15.html');
}
?>
