<?php
$num1= 21;
$num2= 22;
$operacion='suma';
switch ($operacion){
case 'suma': echo "la suma es:".$operacion=$num1+$num2;
break;
case 'resta': echo "la resta es:".$operacion=$num1-$num2;
break;
case 'multi': echo "la multiplicacion es:".$operacion=$num1*$num2;
break;
case 'divi': echo "la division es:".$operacion=$num1/$num2;
break;
default: echo "Digite una de las 4 operaciones básicas";
break;
}

?>