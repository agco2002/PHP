<?php
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "prueba_conexion";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error ) {
	die ("Conexión fallida: " . $conn->connect_error);
}
//Obtener datos del formulario
$nombre = $_POST["nombre"];


//Consulta para obtener todos los registros
$sql = "SELECT * FROM conexion";

$result = $conn->query($sql);

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){ 
        echo "ID. " . $row['id'] ."<br>";
        echo "Nombre: ". $row['nombre'] . "<br>";
        echo "Email: ". $row['email'] . "<br>";
        echo "<br>";
    }
    

} else {
    echo"No se encontraron registros";
}

?>