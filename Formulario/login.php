<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="ingresar.css">
  </head>
  <body>

    <div class="login-box">
      <h1>Ingresar</h1>
      <form action="login.php" method="post">
        <!-- USERNAME INPUT -->
        <label for="username">Usuario</label>
        <input type="text" placeholder="Escriba nombre de usuasrio" name="usuario">
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Escriba su contraseña" name="contraseña">
        <input type="submit" value="ingresar">
        <a href="#">¿Olvido su contraseña?</a><br>
        <a href="registro.php">¿No esta registrado?</a>
      </form>
    </div>
  </body>
</html>