<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inicio sesion juan trujillo";
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error ) {
	die ("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST["nombre"];
$contraseña = $_POST["contraseña"];

// Insertar datos en la base de datos
$sql = "INSERT INTO datos (Nombre,contraseña) VALUES ('$nombre', '$contraseña')";

if ($conn->query($sql) === TRUE) {
	echo "Datos insertados correctamente";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>