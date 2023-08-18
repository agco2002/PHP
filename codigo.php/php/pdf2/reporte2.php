<?php
require 'conexion2.php'; //nombre del archivo de conexion
require 'plantilla2.php'; //nombre de la carpeta donde esta el archivo


$pdf = new PDF(); //crear un nuevo archivo
$pdf-> addpage(); //crear una pagina 
$pdf-> setfont("times", "b", 12); //Tipo de letra del reporte
$pdf-> cell(125,5,"REPORTE EN PDF CON SQL", 11,11 ,"R");

$pdf->SetTextColor(0,0,0);
    
//Consultar la base de datos para verificar las credenciales
$sql= "SELECT nombre, apellido, email, telefono, sueldo, fecha_ingreso FROM operarios";
$resultado= $conn->query($sql);
$pdf->Ln(9); //Salto de linea

$pdf-> cell(25,8, "nombre",1,0,"L"); //Estructura de la tabla
$pdf-> cell(25,8, "apellido",1,0,"L");
$pdf-> cell(65,8, "email",1,0,"L");
$pdf-> cell(25,8, "telefono",1,0,"L");
$pdf-> cell(25,8, "sueldo",1,0,"L");
$pdf-> cell(30,8, "fecha_ingreso",1,1,"L");

//Encabezado de la linea
while ($fila=$resultado->fetch_assoc()) {
  
    $pdf-> cell(25,8,$fila[ "nombre"],1,0,"L");
    $pdf-> cell(25,8,$fila[ "apellido"],1,0,"L");
    $pdf-> cell(65,8,$fila[ "email"],1,0,"L");
    $pdf-> cell(25,8,$fila[ "telefono"],1,0,"L");
    $pdf-> cell(25,8,$fila[ "sueldo"],1,0,"L");
    $pdf-> cell(30,8,$fila[ "fecha_ingreso"],1,1,"L");
    
}



$pdf-> addpage();
$pdf->output();



?>