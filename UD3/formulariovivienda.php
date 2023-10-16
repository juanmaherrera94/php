<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Datos de Vivienda</title>
</head>
<body>
    <h2>Insercion de vivienda</h2>
    <form action="pueba.php" method="POST">
        <table>
            <tr>
                <td>Tipo de Vivienda:</td>
                <td>
                    <select name="tipo_vivienda">
                        <option value="Piso">Piso</option>
                        <option value="Adosado">Adosado</option>
                        <option value="Chalet">Chalet</option>
                        <option value="Casa">Casa</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Zona:</td>
                <td>
                    <select name="zona">
                        <option value="Centro">Centro</option>
                        <option value="Nervión">Nervión</option>
                        <option value="Triana">Triana</option>
                        <option value="Aljarafe">Aljarafe</option>
                        <option value="Macarena">Macarena</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Dirección:</td>
                <td><input type="text" name="direccion" required></td>
            </tr>
            <tr>
                <td>Número de Dormitorios (1-5):</td>
                <td> 
                <input type="radio" name="num_dormitorios" value="1">1
                <input type="radio" name="num_dormitorios" value="2">2
                <input type="radio" name="num_dormitorios" value="3">3
                <input type="radio" name="num_dormitorios" value="4">4
                <input type="radio" name="num_dormitorios" value="5">5
                </td>
                
            </tr>
            <tr>
                <td>Precio en Euros:</td>
                <td><input type="text" name="precio" required></td>
            </tr>
            <tr>
                <td>Tamaño en Metros Cuadrados:</td>
                <td><input type="text" name="tamanio" required></td>
            </tr>
            <tr>
                <td>Extras:</td>
                <td>
                    <input type="checkbox" name="extras[]" value="Piscina"> Piscina<br>
                    <input type="checkbox" name="extras[]" value="Jardín"> Jardín<br>
                    <input type="checkbox" name="extras[]" value="Garage"> Garage<br>
                </td>
            </tr>
            <tr>
                <td>Observaciones:</td>
                <td><textarea name="observaciones" rows="4" cols="50"></textarea></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
