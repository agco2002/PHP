<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro de la pagina</title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>

    
      
    <form class="form" action="conexion.php" method="POST">
      <h1>Registrar</h1>  
      
        <label for="username">Nombre</label>
        <input type="text" placeholder="Ingresar nombre" name="nombre">

        <label for="username">Usuario</label>
        <input type="text" placeholder="Ingresar usuario"  name="usuario">
       
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Ingresar contraseña" name="contraseña">

        <input type="submit" value="Registrarse">

        <a href="ingresar.php.php">¿Ya tiene una cuenta?</a><br>
       
    </form>

  </body>
</html>
