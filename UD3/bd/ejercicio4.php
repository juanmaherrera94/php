<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $conexion ="mysql:host=127.0.0.1;dbname=empresa";
    $usser="root";
    $password ="";
    $nombre=$_POST["nombre"];
    $clave=$_POST["clave"];
    $rol=$_POST["rol"];
    try {
        $bd=new PDO($conexion,$usser,$password);
        echo "Conexion realizada con exito<br>";
        $sql=$bd->prepare("INSERT INTO usuarios (nombre,clave,rol) VALUES (:nombre, :clave, :rol)");
        $sql->bindParam(":nombre",$nombre);
        $sql->bindParam(":clave",$clave);
        $sql->bindParam(":rol",$rol);
        $sql->execute();
        echo "Usuario agregado correctamente";
    } catch (PDOException $e) {
        echo "Error al agregar el usuario".$e->getMessage();
    }
}
?>