<?php
require 'conexion.php';
// Obtener datos del formulario

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$contraseña = md5 ($_POST["contraseña"]);

// Insertar datos en la base de datos
  // Verificar si el usuario ya existe en la base de datos
  $sql = "SELECT id FROM sesion WHERE usuario = '$usuario' AND contraseña= '$contraseña'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
	  echo "El nombre de usuario ya está registrado. Por favor, elige otro nombre de usuario.";
  } else {
	  // Insertar el nuevo usuario en la base de datos
	  $sql = "INSERT INTO sesion(nombre, email, usuario, contraseña) VALUES ('$nombre', '$email', '$usuario', '$contraseña')";
	  if ($conn->query($sql) === TRUE) {
		  // Redireccionar a la página de inicio de sesión
		  header("Location: login.php");
		  exit();
	  } else {
		  echo "Error al registrar el usuario: " . $conn->error;
	  }
	   }
	   $conn->close();
	   ?>


