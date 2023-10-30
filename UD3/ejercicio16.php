<!DOCTYPE html>
<html>
<head>
    <title>Programa de Valor Numerico</title>
</head>
<body>
    <p>Haga clic en los botones para modificar el valor:</p>
    <?php
    session_start();
    $valor = isset($_SESSION['numero']) ? $_SESSION['numero'] : 0;
    ?>
    <form action="procesar_ejercicio16.php" method="post">
    <button type="submit" name="accion" value="Bajar"
    style="font-size: 4rem">-</button>
    <span style="font-size: 4rem">
    <?php  echo "$valor"; ?>
    </span>
    <button type="submit" name="accion" value="Subir"
    style="font-size: 4rem">+</button>
    <br>
    <input type="submit" name="accion" value="Poner a cero">
    </form>
</body>
</html>