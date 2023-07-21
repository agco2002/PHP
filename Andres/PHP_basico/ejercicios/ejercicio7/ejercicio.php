<head>
#dar nombre a la página
<title>Tablas de multiplicar</title>
</head>
#agregar un color de texto y dar un tamaño de margen a la tabla - tabla centrado
<body text="#171818" topmargin=10><center>
	#subtitulo con salto de linea
	<h2>TABLA DE MULTIPLICAR<br><br>
<?php
#agregar variable del numero con el que se va a multiplicar 
$ciclo1=2;
while($ciclo1<=2)
{

#TR ES PARA REALIZAR FILAS 
 
echo "<table border=5><tr align=center><td colspan=5>Tabla de multiplicar del ".$ciclo1.":</td></tr>";
#Variable de numeros a multiplicar que va del 1 al 10
$ciclo2=1;
while($ciclo2<=10)
{

#TD ES PARA REALIZAR UNA CELDA 
#operación de la multiplicación 
$mult=$ciclo1*$ciclo2;
echo "<tr align=center><td>".$ciclo1."</td><td> X </td><td>".$ciclo2."</td><td> = </td><td>".$mult."</td></tr>";
$ciclo2++;
}
#cierre de la tabla
echo "</table>";
$ciclo1++;
}
?>
</h1>
</center>
</body>