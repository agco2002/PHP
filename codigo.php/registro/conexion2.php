<?php
require 'conexion.php';
//Procesarel formulario de inicio sesion
if ($_SERVER ["REQUEST_METHOD"] == "POST"){
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

//Consultar la base de datos para verificar las credenciales
$sql= "SELECT * FROM sesion WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
$result = $conn ->query($sql);

if ($result -> num_rows == 1){
    //Inicio sesion exitoso
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("Location: Bienvenidos.php");
    exit();
 } else{
    //credenciales incorrectas
    echo $error_message = "Usuario o contraseña incorrecta";
 }
}

$conn ->close();
?>