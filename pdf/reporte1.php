<?php
require 'conexion.php'; //nombre del archivo de conexion
require 'plantilla.php'; //nombre de la carpeta donde esta el archivo


$pdf = new PDF(); //crear un nuevo archivo
$pdf-> addpage(); //crear una pagina 
$pdf-> setfont("times", "b", 12); //Tipo de letra del reporte
$pdf-> cell(125,5,"REPORTE EN PDF CON SQL", 11,11 ,"R");

$pdf->Ln(13);//salto de linea

//Consultar la base de datos para verificar las credenciales
$sql= "SELECT estudiante, apellido, edad, telefono FROM alumno";
$resultado= $conn->query($sql);
$pdf->Ln(9); //Salto de linea

$pdf-> cell(50,8, "estudiante",1,0,"C"); //Estructura de la tabla
$pdf-> cell(50,8, "apellido",1,0,"C");
$pdf-> cell(50,8, "edad",1,0,"C");
$pdf-> cell(47,8, "telefono",1,1,"C");

//Encabezado de la linea
while ($fila=$resultado->fetch_assoc()) {
  
    $pdf-> cell(50,8,$fila[ "estudiante"],1,0,"L");
    $pdf-> cell(50,8,$fila[ "apellido"],1,0,"C");
    $pdf-> cell(50,8,$fila[ "edad"],1,0,"C");
    $pdf-> cell(47,8,$fila[ "telefono"],1,1,"C");
}


$pdf-> addpage();
$pdf->output();



?>