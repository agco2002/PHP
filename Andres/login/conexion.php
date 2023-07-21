<?php
// Establecer la conexión con la base de datos
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "ingresar";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Procesar el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

      // Verificar si el usuario ya existe en la base de datos
      $sql = "SELECT id FROM datos WHERE usuario = '$usuario', AND contraseña = '$contraseña'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          echo "El nombre de usuario ya está registrado. Por favor, elige otro nombre de usuario.";
      } else {
          // Insertar el nuevo usuario en la base de datos
          $sql = "INSERT INTO datos(nombre, usuario, contraseña) VALUES ('$nombre', '$usuario', '$contraseña')";
          if ($conn->query($sql) === TRUE) {
              // Redireccionar a la página de inicio de sesión
              header("Location: ingresar.php.php");
              exit();
          } else {
              echo "Error al registrar el usuario: " . $conn->error;
          }
      }
  }
  
  $conn->close();
  ?>