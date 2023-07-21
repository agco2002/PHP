<?php
// Conexión a la base de datos
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "ingresar";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error ) {
	die ("Conexión fallida: " . $conn->connect_error);
}



// Obtener datos del formulario
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];


// Insertar datos en la base de datos
$sql = "INSERT INTO datos(usuario, contraseña) VALUES ('$usuario', '$contraseña')";

if ($conn->query($sql) === TRUE) {
	echo "Bienvenido a esta pagina";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>