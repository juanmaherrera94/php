<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Controles en formularios (1).  Juanma Herrera
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://educacionadistancia.juntadeandalucia.es/centros/jaen/pluginfile.php/331473/mod_assign/introattachment/0/ejercicios-formularios.css" >
</head>

<body>
  <h1>Examen 2</h1>

  <form action="procesar_formulario.php" method="post">
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre">
      <br>
      <label for="correo">Correo Electronico</label>
      <input type="email" id="correo" name="correo">
      <br>
      <label for="pass">Contraseña</label>
      <input type="password" id="pass" name="pass">
      <br>
      <label for ="pass2">Confirmar contraseña</label>
      <input type="password" id="pass2" name="pass2">
      <br>
      <label for="genero">Masculino</label>
      <input type="radio" id="masculino" name="genero" value="Masculino">
      <br>
      <label for="genero2">Femenino</label>
      <input type="radio" id="femenino" name="genero" value="Femenino">
      <br>
      <label for="terminos">Acepto los terminos y condiciones</label>
      <input type="checkbox" name="terminos">
      <br>
      <input type="submit" value="Enviar">
    </p>
  </form>
  <footer>
    <p>Juanma Herrera</p>
  </footer>
</body>
</html>