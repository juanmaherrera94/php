<?php
$msg="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre=trim(htmlspecialchars($_POST["nombre"]));
    $correo=trim(htmlspecialchars($_POST["correo"]));
    $pass=trim(htmlspecialchars($_POST["pass"]));
    $pass2=trim(htmlspecialchars($_POST["pass2"]));
    $genero=$_POST["genero"];
    $acepto=isset($_POST["acepto"]);

    if(empty($nombre)){
        $msg .= "<p>El nombre es obligatorio<p>" ."<br>";
    }

    if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){

        $msg .="<p>El correo debe ser una direccion valida" ."<br>";
    }

    if ($pass <= 8){
        $msg .="Debe tener 8 o mas caracteres" ."<br>";
    }

    if($pass !== $pass2){
        $msg .="Las contraseñas deben coincidir" ."<br>";
    }

    if(!$acepto){
        $msg.="Debe de aceptar las conficiones" ."<br>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Juanma Herrera Examen Validación de Formularios, Cookies y Sesiones</title>
   
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/tooplate-style.css">
    <!-- tooplate style -->
 
</head>

<body>
   
    <div class="container">
        <section class="tm-section-head" id="top">
            <header id="header" class="text-center tm-text-gray">
                <h1>Validación datos del formulario</h1>
            </header>

       </section>
       <section class="tm-section-12" id="tm-section-12">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-4"></div>
                <div class="col-lg-8 col-md-8 col-xs-8">
                    <div class="contact_message">
                            <h2>
                            <?php
                                if(!empty($msg)){
                                    echo $msg;
                                }

                                if(empty($msg)){
                                    setcookie("cookieNombre",$nombre,time()+3600);
                                    setcookie("cookiePass",$pass,time()+3600);
                                    session_start();
                                    $_SESSION["nombreUsuario"]=$nombre;
                                    header("Location: bienvenida.php");
                                }
                            ?>
                            <a href="formulario_registro.html">Volver al formulario de registro</a>
                            </h2>
                            
                  </div>

                </div>
         
            </div>
        </section>
        <footer class="mt-5">
            <p class="text-center">Examen DWES 2/11/2023 Juanma Herrera</p>
        </footer>
    </div>
  
</body>

</html>