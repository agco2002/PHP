<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Registro</title>
 <link rel="stylesheet" href="style3.css">
</head>
<body>
<form class="form" action="crear.php" method="POST">
      <h1>Registro de crud</h1>  
      
        <label for="nombre">Nombre</label>
        <input type="text" placeholder="Ingresar Nombre" name="nombre">

        <label for="email">Email</label>
        <input type="text" placeholder="Ingresar Email"  name="email">

        <label for="usuario">Usuario</label>
        <input type="text" placeholder="Ingresar usuario"  name="usuario">
       
        <label for="contraseña">Contraseña</label>
        <input type="text" placeholder="Ingresar contraseña"  name="contraseña">
       
       


        <a href="#"><input type="submit" value="Registrarse"></a>
        <a href="index.php"><input type="button" value="Inicio"></a>
        
        
       
    </form>

      </body>
      </html>

<?php
require 'conexion.php';
// Procesar el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $contraseña = md5($_POST["contraseña"]);

      // Verificar si el usuario ya existe en la base de datos
      $sql = "SELECT *FROM sesion WHERE usuario = '$usuario' AND contraseña= '$contraseña'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          echo "El nombre de usuario ya está registrado. Por favor, elige otro nombre de usuario.";
      } else {
          // Insertar el nuevo usuario en la base de datos
          $sql = "INSERT INTO sesion(nombre, email, usuario, contraseña) VALUES ('$nombre','$email', '$usuario', '$contraseña')";
          if ($conn->query($sql) === TRUE) {
              // Redireccionar a la página de inicio de sesión
              header("Location: index.php");
              exit();
          } else {
              echo "Error al registrar el usuario: " . $conn->error;
          }
      }
  }

?>
