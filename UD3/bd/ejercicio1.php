<?php
$usuario = $_POST["Nombre"];
$clave = $_POST["Pass"];
$conexion = "mysql:host=127.0.0.1;dbname=empresa";
$password = "";
try {
    $bd = new PDO($conexion, $usser, $password);
    echo "Conexión realizada con éxito" . "<br>";

    $sql = $bd->prepare("SELECT * FROM usuarios WHERE nombre = :usuario AND clave = :clave");
    $sql->bindParam(":usuario",$usuario, PDO::PARAM_STR);
    $sql->bindParam(":clave", $clave, PDO::PARAM_STR);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        echo "Inicio de sesión correcto" ;
    } else {
        echo "Error al iniciar sesión";
    }

} catch (PDOException $e) {
    echo "Error en la base de datos: " . $e->getMessage();
}
?>