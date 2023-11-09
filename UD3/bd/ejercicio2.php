<?php
$conexion = "mysql:host=127.0.0.1;dbname=empresa";
$usser="root";
$password = "";

if (isset($_POST['eliminar'])) {
    $usuarioEliminar = $_POST['eliminar'];
    try {
        $bd = new PDO($conexion, $usser, $password);
        $sql = $bd->prepare("DELETE FROM usuarios WHERE Codigo = :usuarioEliminar");
        $sql->bindParam(':usuarioEliminar', $usuarioEliminar, PDO::PARAM_INT);
        $sql->execute();
    } catch (PDOException $e) {
        echo "Error al eliminar el usuario: " . $e->getMessage();
    }
}
try {
    $bd = new PDO($conexion, $usser, $password);
    echo "Conexión realizada con éxito" . "<br>";
    $sql=$bd->prepare("SELECT * from usuarios");
    $sql->execute();

    if($sql->rowCount()>0){
        echo "<table border='1'>";
        echo "<tr><th>Codigo</th><th>Nombre</th><th>Clave</th><th>Rol</th><th>Eliminar</th></tr>";
        foreach ($sql as $fila) {
            echo "<tr>";
            echo "<td>" . $fila["Codigo"] . "</td>";
            echo "<td>" . $fila["Nombre"] . "</td>";
            echo "<td>" . $fila["Clave"] . "</td>";
            echo "<td>" . $fila["Rol"] . "</td>"; 
            echo "<td>" . "<form action='' method='post'> <input type='hidden' name='eliminar' value='" . $fila["Codigo"] . "'> <input type='submit' value='Eliminar'></form>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No hay registros en la base de datos";
    }

}catch(PDOException $e){
    echo "Error en la base de datos" . $e->getMessage();
}
$conexion=null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>