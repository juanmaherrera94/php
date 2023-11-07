<?php
$msg="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim(htmlspecialchars($_POST["nombre"]));
    $correo = trim(htmlspecialchars($_POST["correo"]));
    $pass = trim(htmlspecialchars($_POST["pass"]));
    $pass2 = trim(htmlspecialchars($_POST["pass2"]));
    $terminos = isset($_POST["terminos"]);
    
    if (empty($nombre) || empty($correo)) {
        $msg .= "El nombre y el correo electrónico son obligatorios." . "<br>";
    } 
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $msg .= "El correo electrónico no tiene un formato válido." . "<br>";
    } 
    if ($pass !== $pass2) {
        $msg .= "Las contraseñas no coinciden." . "<br>";
    } 
    if (!$terminos) {
        $msg .= "Debes aceptar los términos y condiciones." . "<br>";
    }
   
}
if (empty($msg)) {
    session_start();
    setcookie("UsuarioRegistrado", $nombre, time() + 3600);
    $_SESSION["NombreUsuario"] = $nombre;
    header("Location : bienvenida.php");
}else{
    echo $msg;
}
?>
