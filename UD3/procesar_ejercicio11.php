<?php
$correo=trim($_POST["correo"]);
$recibir=trim($_POST["recibir"]);

if(filter_var($correo,FILTER_VALIDATE_EMAIL)){
    if($recibir=="Si"){
        $msg= "Si deseo recibir correos";
    }elseif($recibir=="No"){
        $msg="No deseo recibir correos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Ejercicio 11.  Juanma Herrera
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://educacionadistancia.juntadeandalucia.es/centros/jaen/pluginfile.php/331473/mod_assign/introattachment/0/ejercicios-formularios.css" >
</head>

<body>
<h2>
<?php
echo "Tu correo $correo ha sido validado.";?>
<br>
<br>
<?php echo $msg;?>
</h2>
</body>
</html>