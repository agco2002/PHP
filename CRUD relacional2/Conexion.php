<?php
// Conexión a la base de datos
// Establecer la conexión con la base de datos
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "universidad";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
	die("Conexión fallida: " . $conn->connect_error);
}