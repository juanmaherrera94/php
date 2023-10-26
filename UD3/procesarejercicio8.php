<?php
$nombre = trim($_POST["nombre"]);
$apellidos = $_POST["apellidos"];

if (empty($nombre) || empty($apellidos)) {
    $msg = "Los campos no pueden estar vacíos";
} elseif (preg_match('/[<>“‘]/', $nombre) || preg_match('/[<>“‘]/', $apellidos)) {
    $msg= "No se aceptan estos caracteres";
}else{
   $msg = "Tu nombre es : $nombre y tu apellido es: $apellidos";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Controles en formularios (1).  Juanma Herrera
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://educacionadistancia.juntadeandalucia.es/centros/jaen/pluginfile.php/331473/mod_assign/introattachment/0/ejercicios-formularios.css" >
</head>

<body>
  <h1>Resultado</h1>
<?php
    echo $msg;
?>
  

  <footer>
    <p>Juanma Herrera</p>
  </footer>
</body>
</html>

<?php
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];

if (empty($nombre) || empty($apellidos)) {
    echo "Los campos no pueden estar vacíos";
} elseif (preg_match('/[<>“‘]/', $nombre) || preg_match('/[<>“‘]/', $apellidos)) {
    echo "No se aceptan estos caracteres";
}else{
    echo "Tu nombre es : $nombre y tu apellido es: $apellidos";
}
?>