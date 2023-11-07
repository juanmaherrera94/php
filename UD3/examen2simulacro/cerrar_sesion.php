<?php
session_start();
if (isset($_SESSION["NombreUsuario"])) {
    unset($_SESSION["NombreUsuario"]);
}

if (isset($_COOKIE["UsuarioRegistrado"])) {
    setcookie("UsuarioRegistrado", "", time() - 3600, "/");
}

header("Location: inicio_sesion.php");
?>
