<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>actualizar</title>
  <link rel="stylesheet" href="style4.css">
</head>
<body>

<form class="form" action="actualizar.php" method="POST">
      <h1>Actualizar</h1>  
      
        <label for="id">ID</label>
        <input type="text" placeholder="Ingresar su id" name="id">

        <label for="email">Email</label>
        <input type="text" placeholder="Ingresar Email"  name="email">

        <label for="usuario">Usuario</label>
        <input type="text" placeholder="Ingresar su usuario"  name="usuario">
       
    <a href="#"><input type="submit" value="Actualizar"></a>
    <a href="index.php"><input type="button" value="Regresar"></a>
        

        
       
    </form>
</body>
</html>

<?php
   // Verificar si se ha enviado el formulario
   require 'conexion.php';
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $id = $_POST["id"];
   

    // Consulta para actualizar un registro
    $sql = "UPDATE sesion SET usuario='$usuario', email='$email' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;
    }
}
?>
