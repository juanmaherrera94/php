<?php
// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilar los datos del formulario
    $nombre = $_POST["nombre"];
    $asiento = $_POST["asiento"];
    $menu = $_POST["menu"];
    $informacionComercial = isset($_POST["informacionComercial"]) ? "Sí" : "No";

    // Almacenar los datos en cookies con una duración de 10 días
    setcookie("nombre", $nombre, time() + 10 * 24 * 60 * 60);
    setcookie("asiento", $asiento, time() + 10 * 24 * 60 * 60);
    setcookie("menu", $menu, time() + 10 * 24 * 60 * 60);
    setcookie("informacionComercial", $informacionComercial, time() + 10 * 24 * 60 * 60);

    // Mostrar un mensaje de confirmación
    echo "La información ha sido correctamente almacenada.";
} else {
    // Comprobar si existen cookies con datos anteriores
    $nombre = isset($_COOKIE["nombre"]) ? $_COOKIE["nombre"] : "";
    $asiento = isset($_COOKIE["asiento"]) ? $_COOKIE["asiento"] : "";
    $menu = isset($_COOKIE["menu"]) ? $_COOKIE["menu"] : "";
    $informacionComercial = isset($_COOKIE["informacionComercial"]) ? $_COOKIE["informacionComercial"] : "";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Preferencias de Vuelo</title>
</head>
<body>
    <h1>Formulario de Preferencias de Vuelo</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nombre">Nombre del usuario:</label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>" required><br><br>

        <label for="asiento">Asiento:</label>
        <select name="asiento">
            <option value="pasillo" <?php if ($asiento == "pasillo") echo "selected"; ?>>Pasillo</option>
            <option value="ventanilla" <?php if ($asiento == "ventanilla") echo "selected"; ?>>Ventanilla</option>
            <option value="centro" <?php if ($asiento == "centro") echo "selected"; ?>>Centro</option>
        </select><br><br>

        <label for="menu">Menú:</label>
        <select name="menu">
            <option value="vegetariano" <?php if ($menu == "vegetariano") echo "selected"; ?>>Vegetariano</option>
            <option value="no-vegetariano" <?php if ($menu == "no-vegetariano") echo "selected"; ?>>No-vegetariano</option>
            <option value="diabético" <?php if ($menu == "diabético") echo "selected"; ?>>Diabético</option>
            <option value="infantil" <?php if ($menu == "infantil") echo "selected"; ?>>Infantil</option>
        </select><br><br>

        <label for="informacionComercial">¿Interesado en recibir informaciones comerciales?</label>
        <input type="checkbox" name="informacionComercial" <?php if ($informacionComercial == "Sí") echo "checked"; ?>><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
