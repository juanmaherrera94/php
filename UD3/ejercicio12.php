<?php
$msg="";
if(isset($_POST["bcrear"])){
  $segundos=(int)$_POST["segundos"];
  $sumaSegundos=time()+$segundos;
  setcookie("cookie",$sumaSegundos,$sumaSegundos);
  $msg="Se ha creado la cookie y se destruira en $segundos segundos";
}
if(isset($_POST["bcomprobar"])){
  if(isset($_COOKIE["cookie"])){
      $expira=$_COOKIE["cookie"];
      $restar=$expira-time();
      $msg= "La cookie se destruira en $restar segundos ";
  }else{
    $msg= "La cookie no existe";
  }
}
if(isset($_POST["bdestruir"])){
  if(isset($_COOKIE["cookie"])){
    setcookie("cookie2","",time()-3600);
    $msg= "Se ha destruido la cookie";
  }
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
  <h1>CREACION Y DESTRUCCION DE COOKIES</h1>
  <?php
  echo $msg;
  ?>

  <form action="ejercicio12.php" method="post">
    
    <p>Eliga una opcion</p>
    <ul>
        <li>Crear una cookie con una duracion de <input type="text" name="segundos" size="1">segundo (entre 1 y 60)<input type="submit" name="bcrear" value="crear"></li>
        <li>Comprobar la cookie <input type="submit" name="bcomprobar" value="Comprobar"></li>
        <li>Destruir la cookie <input type="submit" name="bdestruir" value="Destruir"> </li>
    </ul>
    </p>
  </form>
  <footer>
    <p>Juanma Herrera</p>
  </footer>
</body>
</html>