<?php
       //   setcookie('idioma','en', time()-1);  DESCOMENTAR PARA ELIMINAR LA COOKIE
 
    if ($_SERVER["REQUEST_METHOD"]== "POST") // POST
    {
        $idioma =  $_POST["idioma"];
        setcookie('idioma', $idioma, time() + (3600 *24));
        if ($idioma == "es") {
            $msg = "Ha seleccionado idioma castellano";
        }
        else {
            $msg = "Ha seleccionado idioma inglés";     
        }

    }
    else // NO POST
    {   if (isset($_COOKIE["idioma"])) {   //NO POST Y SI COOKIE
            $idioma = $_COOKIE["idioma"];
            if ($idioma == "es") {
                $msg = "Seleccionó el idioma Castellano";
             }
            else {
                $msg = "Seleccionó el idioma Inglés";
            }
        } 
        else { //NO POST Y NO COOKIE
          
            $msg = "Por favor seleccione un idioma"; 
        }   
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $msg ?></h1>
    <?php
        if ((!($_SERVER["REQUEST_METHOD"] == "POST")) && (!isset($_COOKIE["idioma"]) ))
            {
    ?>
       <form action="cookie.php" method="post">
            <table>
                <tr>
                    <td>Idioma</td>
                    <td>
                        <select name="idioma">
                            <option value="es">Castellano</option>
                            <option value="en">Inglés</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Enviar">
                    </td>
                </tr>
            </table>
        </form>    
    <?php
            }
        
    ?>    
</body>
</html>