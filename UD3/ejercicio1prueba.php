<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma</title>
</head>
<body>
    <form action="prueba_formulario.php" method="POST">
    <input name="num1" type="number">
        <input name="num2" type="number">
        <input type="submit">
        <select name="operacion">
            <option value="sumar"> sumar </option>
            <option value="restar"> restar </option>
            <option value="multiplicar"> multiplicar </option>
            <option value="dividir"> dividir </option>
        </select>
    </form>
</body>
</html><?php
    if(isset($_POST["num1"])){
        $numero1 = $_POST["num1"];
    }
    if(isset($_POST["num2"])){
        $numero2 = $_POST["num2"];
    }
?>