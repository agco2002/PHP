<?php	
$tabla = 10;
echo "<h1>Tabla del $tabla</h1>";
	for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
		for ($tabla=10; $tabla <=10 ; $tabla++) { 
			echo "
            
            
            $tabla X $multiplicador =  ";
			echo $tabla * $multiplicador;
            echo "<br>";
		}
}
?>