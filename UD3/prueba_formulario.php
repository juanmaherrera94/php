<?php
$numero1 = $_POST["num1"];
$numero2 = $_POST["num2"];
$operacion = $_POST["operacion"];
    switch($operacion){
        case "sumar":
             $resultado = $numero1 + $numero2;
            echo("El resultado es: ". $resultado);
            break;
        case "restar":

            $resultado = $numero1 - $numero2;
            echo("El resultado es: ". $resultado);
            break;
        case "multiplicar":

            $resultado = $numero1 * $numero2;
            echo("El resultado es: ". $resultado);

            break;
        case "dividir":

            $resultado = $numero1 / $numero2;
            echo("El resultado es: ". $resultado);
            break;
        default:
        echo("No se puede realizar la operacion");
    }
?>