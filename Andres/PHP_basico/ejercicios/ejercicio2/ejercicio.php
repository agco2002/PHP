<?php
  $a = 10;
  $b = 5;
  $inicio = $a;

  echo "<b>Operadores de asignacion <b> <br><br>";
  echo "Valor de inicio: a = $a, b = $b <br> <br>";
  echo "Suma: a += b equivale a = a + b <br>";
 ;
  echo "(El valor de a es: " . ($a + $b)  . " ) <br> ";

  $a = $inicio;
  echo "Resta: a -= b  equivale a = a - b <br>";
  echo "(El valor de a es: " .($a - $b) . ") <br>";

  $a = $inicio;
  echo" Multiplicacion: a *= b equivale a = a * b <br>";
  echo "(Ahora el valor de a es: " . ($a * $b) . ") <br>";

  $a = $inicio;
  echo "Division: a /= b equivale a = a / b <br> ";
  echo "(El valor de a es: " .($a / $b) . ") <br>";

  //Modulo-residuo de una division
  $a = $inicio;
  echo "Modulo: a %= b equivale a = a % b <br> ";
  echo "(El valor de a es: " .($a % $b) . ") <br>";
?>
<?php
  $a = 22;
  $b = 21;
  $inicio = $b;

 //Pre-incremento- multiplicación 
 echo "<br><br>";
 echo "<b>Operador de incremento</b> <br><br>";
 echo "Valores iniciales b = $b, a = $a <br>";
 echo "Operador ++ (anterior): ++b * a ==  " . ++$b*$a . "<br>";
 echo "(El valor de b es: $b)<br> " ;
//Post-incremento- multiplicación
 $b = $inicio ;
 echo "Operador ++ (posterior): b++ * a == " . $b++*$a ."<br>";
 echo "(El valor de b es: $b) <br>";
//Pre-decremento- multiplicación
 $b = $inicio;
 echo "Operador -- (anterior): --b*a == " . --$b*$a . "<br>";
 echo "(El valor de b es: $b)<br>";
//Post-decremento- multiplicación
 $b = $inicio;
 echo "Operador --(posterior): b--*a == "  . $b--*$a . "<br>";
 echo "El valor de b es: $b";
?>