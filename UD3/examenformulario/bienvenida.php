<?php
session_start();
if(isset($_COOKIE["cookieNombre"]) && isset($_SESSION["nombreUsuario"])){
    $nombre=$_SESSION["nombreUsuario"];
    $nombre2=$_COOKIE["cookieNombre"];
    $mensaje= "Bienvenido " . $nombre . " tu registro ha sido realizado con exito.";
}
if (!isset($_COOKIE["cookieNombre"])){

    header("Location:formulario_registro.html");
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
            <h1>Bienvenido</h1>
            </header>

       </section>
       <section class="tm-section-12" id="tm-section-12">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-4"></div>
                <div class="col-lg-8 col-md-8 col-xs-8">
                    <div class="contact_message">
                            
                         <h1> 
                            <?php
                            echo $mensaje;
                            ?>
                           
                        </h1>
                        <a href="login.html">Volver al login</a>
                            
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