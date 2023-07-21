<?php
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "crud";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
	die("Conexión fallida: " . $conn->connect_error);
}
$nombere = $_POST["id"];
// Consulta para obtener todos los registros
$sql = "SELECT * FROM datos where nombre =$nombre";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Nombre: " . $row["nombre"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "<br>";
    }
} else {
    echo "No se encontraron registros";
}
?>