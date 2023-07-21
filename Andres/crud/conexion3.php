<?php
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "crud";

$conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
    
        // Consulta para actualizar un registro
        $sql = "UPDATE datos SET nombre='$nombre', email='$email' WHERE id=$id";
    
        if ($conn->query($sql) === TRUE) {
            echo "Registro actualizado correctamente";
        } else {
            echo "Error al actualizar el registro: " . $conn->error;
        }
    }
    ?>