<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["Nombre"];
    $clave = $_POST["Pass"];

    try {
        $conex = new PDO("mysql:host=127.0.0.1;dbname=empresa", "usuario", "clave");
        $conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM usuarios WHERE nombre = '$usuario' AND clave = '$clave'";
        $result = $conex->query($sql);

        if ($result->rowCount() > 0) {
            echo "Acceso concedido. ¡Bienvenido, $usuario!";
        } else {
            echo "Usuario o contraseña incorrectos. Por favor, intenta de nuevo.";
        }
    } catch (PDOException $e) {
        echo "Error al conectarse a la base de datos: " . $e->getMessage();
    }
}
?>
