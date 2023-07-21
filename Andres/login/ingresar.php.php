<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingresar a la pagina</title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>

    
      
    <form class="form" action="validar.php" method="POST">
        <h1>Ingresar</h1>
        <label for="username">Usuario</label>
        <input type="text" placeholder="Usuario" name="usuario">
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Contraseña" name="contraseña">
        <input type="submit" value="Ingresar">
        <a href="#">¿Olvido su contraseña?</a><br>

        <a href="registro.php">¿No tiene una cuenta?</a>
        
    </form>

  </body>
</html>
