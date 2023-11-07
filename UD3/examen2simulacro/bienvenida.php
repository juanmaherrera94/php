<?php
$msg=""; 
session_start();
if(!isset($_SESSION["nombreUsuario"]) && !isset($_COOKIE["usuarioRegistrado"])){
   header("Location: formulario.php");
}
session_start();
if (isset($_SESSION["NombreUsuario"])) {
    $msg.= "Bienvenido, " . $_SESSION["NombreUsuario"];
} elseif (isset($_COOKIE["UsuarioRegistrado"])) {
  $msg.=  "Bienvenido, " . $_COOKIE["UsuarioRegistrado"];
} else {
    header("Location: formulario.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Controles en formularios (1). Juanma Herrera
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://educacionadistancia.juntadeandalucia.es/centros/jaen/pluginfile.php/331473/mod_assign/introattachment/0/ejercicios-formularios.css" >
</head>

<body>

  <h1><?php echo $msg ?></h1>
  <form action="cerrar_sesion.php" method="post">
      <input type="submit" name="cerrarsesion" value="Cerrar sesion">
    </p>
  </form>
</body>
</html>