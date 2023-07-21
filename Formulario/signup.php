<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="registro.css">
  </head>
  <body>

    <div class="login-box">
      
        <form action="signup.php" method="post">
            <h1>Registrarse</h1>

            <label for="username">Nombre</label>
            <input type="text" placeholder="Escriba su nombre" name="nombre">

            <label for="username">Usuario</label>
            <input type="text" placeholder="Escriba el nombre de usuario" name="usuario">

            <label for="username">Email</label>
            <input type="Email" placeholder="Escriba su Email" name="email">
        
            <label for="password">Contraseña</label>
            <input type="password" placeholder="Escriba su contraseña" name="contraseña">

            <input type="submit" value="Registrarse">

            <a href="ingresar.php">¿Ya esta registrado?</a>
        </form>
    </div>
  </body>
</html>