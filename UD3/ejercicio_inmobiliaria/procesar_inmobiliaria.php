<?php
    $hay_errores=false;
    $tipo = $_POST["tipo"];
    $zona = $_POST["zona"];
    if (!empty($_POST["direccion"])) {
        $direccion = $_POST["direccion"];
        $error_direccion="";
    }
     else {
        $hay_errores=true;
        $error_direccion="Se requiere la dirección de la vivienda";
    }
    $dormitorios = $_POST["dormitorios"];
    if (!empty($_POST["precio"])) {
        $precio = $_POST["precio"];
        $error_precio="";
    }
    else {
        $hay_errores=true;
        $error_precio="El precio debe ser un valor numérico";
    }
    if (!empty($_POST["tamanno"])) {
        $tamanno = $_POST["tamanno"];
        $error_tamanno="";
    }    
    else {
        $hay_errores=true;
        $error_tamanno="El tamaño debe ser un valor numérico";
    }
    if(isset($_POST["piscina"])) {
       $piscina = true;
    }    
       else {
        $piscina = false;  
    }
    if(isset($_POST["garaje"])) {
        $garaje = true;
     }    
    else {
         $garaje = false;  
     }
     if(isset($_POST["jardin"])) {
        $jardin = true;
     }    
        else {
         $jardin = false;  
     }
     $observaciones =$_POST["observaciones"];


?>
<!DOCTYPE html>
<html lang="es">
	<head>
        <meta charset="utf-8">

    </head>

    <body>
        <h1>Inserción de la vivienda</h1>
        <?php
            if ($hay_errores) {
       
                echo "<p> No se ha podido realizar la inserción de la vivienda debido a los siguientes errores </p>";
       
                if ($error_direccion) {
                    echo "<p> $error_direccion </p>";
                }
                if ($error_precio) {
                    echo "<p> $error_precio </p>";
                }
                if ($error_tamanno) {
                    echo "<p> $error_tamanno </p>";
                }
        ?>   
            <p> [<a href="formulario_inmobiliaria.html">Volver </a> ] </p>      
        <?php    
            }
            else {

            
        ?>
	       <table>  
                <tr>
                    <td>
                        <h3>Tipo de vivienda</h3>

                    </td>
                    <td>
                        <?php echo $tipo ?>
                    </td>
                </tr>
               
                <tr>
                    <td>
                        <h3>Zona</h3>
                   </td>
                    <td>
                        <?php echo $zona ?>
                    </td>
                </tr>  
                <tr>
                    <td>
                        <h3>Dirección</h3>
                   </td>
                    <td>
                        <?php echo $direccion ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Número de dormitorios</h3>
                   </td>
                    <td>
                        <?php echo $dormitorios ?>
                    </td>
                </tr>  
                <tr>
                    <td>
                        <h3>Precio</h3>
                   </td>
                    <td>
                        <?php echo $precio ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>tamaño</h3>
                   </td>
                    <td>
                        <?php echo $tamanno ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Extras (marque los que procedan)</h3>
                   </td>
                    <td>
                        <?php 
                            if($piscina) {
                                echo "piscina, ";
                            } 
                            if ($garaje) {
                                echo "garaje, ";     
                            }
                            if ($jardin) {
                                echo "jardin, ";     
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3>Observaciones</h3>
                   </td>
                    <td>
                        <?php echo $observaciones; ?>
                    </td>
                </tr>
                
        </table>
     <?php
            }
     ?>
	</body>
</html>