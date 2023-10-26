<?php
$msg = "";

if (isset($_POST["titular"])) {
  $titular = $_POST["titular"];
  setcookie("cookie", $titular, time() + 3600);
  $msg = "Has elegido $titular"; 
}

if (isset($_COOKIE["cookie"])) {
  $mostrarTitular = $_COOKIE["cookie"];
} else {
  $msg = "No has elegido ningún titular";
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
  <link rel="stylesheet" href="https://educacionadistancia.juntadeandalucia.es/centros/jaen/pluginfile.php/331473/mod_assign/introattachment/0/ejercicios-formularios.css">
</head>

<body>
  <h1>EJERCICIO 13</h1>
  <ol>
  <form action="ejercicio13.php" method="post">
    <li>  <input type="radio" name="titular" value="Politica">Noticia política</li>
    <li><input type="radio" name="titular" value="Economica">Noticia económica</li>
     <li> <input type="radio" name="titular" value="Deportiva">Noticia Deportiva</li>
      <br>
      <br>
      <input type="submit" value="Enviar">
    </form>
</ol>
   <i><h2><?php echo $msg; ?></h2></i>
  <footer>
    <p>Juanma Herrera</p>
  </footer>
</body>
</html>