<?php
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "registro2";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error ) {
	die ("Conexión fallida: " . $conn->connect_error);
}
?>