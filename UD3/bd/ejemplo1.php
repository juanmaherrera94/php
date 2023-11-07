<?php
$conex="mysql:dbname=empresa;host=127.0.0.1";
$usuario="root";
$clave="";
try{
    $bd=new PDO($conex,$usuario,$clave);
    echo "Conexion realiza con exito" . "<br>";
    $sql="SELECT nombre,clave, rol from usuarios";
    $usuarios=$bd->query($sql);
    echo "Numero de usuarios:" . $usuarios->rowCount() . "<br>";
    foreach ($usuarios as $row){
        print $row["nombre"] . "\t";
        print $row["clave"] . "\t";

    }
}catch (PDOException $e){
    echo "Error con la base de datos: " . $e->getMessage();
}
?>