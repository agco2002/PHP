<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <div class="login-box">
      <h1>Ingresar</h1>
      <form action="conexion1.php" method="post">
        <!-- name INPUT -->
        <label for="nombre">Nombre</label>
        <input type="text" placeholder="Escriba nombre de usuasrio" name="nombre">
        <!-- email INPUT -->
        <label for="email">Email</label>
        <input type="text" placeholder="Escriba nombre de usuasrio" name="email">
        <!-- USERNAME INPUT -->
        <label for="usuario">Usuario</label>
        <input type="text" placeholder="Escriba nombre de usuasrio" name="usuario">
        <!-- PASSWORD INPUT -->
        <label for="contraseña">Contraseña</label>
        <input type="password" placeholder="Escriba su contraseña" name="contraseña">
        
        <input type="submit" value="ingresar">
        <a href="#">¿Olvido su contraseña?</a><br>
        <a href="login.php">Ingresar</a>
      </form>
    </div>
  </body>
</html>