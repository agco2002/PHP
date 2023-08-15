<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eliminar</title>
<link rel="stylesheet" href="style2.css">
</head>

<body>
<form class="form" action="eliminar.php" method="POST">
      <h1>Registro de eliminar</h1>  
      
        <label for="id">id</label>
        <input type="text" placeholder="Ingresar id" name="id">


        
        <input type="submit" value="Eliminar">
        <a href="index.php"><input type="button" value="Inicio"></a>

        
        
       
    </form>
        
</body>

</html>
<?php
// Verificar si se ha enviado el formulario
require 'conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    // Consulta para eliminar un registro
    $sql = "DELETE FROM sesion WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }
}
