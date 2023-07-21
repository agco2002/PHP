<?php
$total_letras= strlen("hola.¿como estas?");
if($total_letras < 100){
    echo"el mensaje fue enviado exitosamente";
} else{
    echo"no se a podido enviar el mensaje"
    .$total_letras. "letra";
}
echo "<br>";
echo "<hr>";

$nota = 1;
if($nota > 30){
    echo "pasa la materia";
}
else{
    echo"no pasa la materia";
}
echo "<br>";
echo "<hr>";

$edad = 20;
if($edad >=18){
    echo"Es mayor de edad";
}
else{
    echo"Es menor de edad";
}
echo "<br>";
echo "<hr>";

$nota = 30;
if($nota > 30){
    echo "pasa la materia";
}
else if($nota == 30){
    echo"puede perder la materia";
}
else{
    echo "pierde la materia";
}
echo "<br>";
echo "<hr>";

$edad= 18;
echo($edad >= 18? "mayor de edad":"menor de edad");
echo "<br>";
echo "<hr>";

/*si la edad es menor a 18(acceso denegado, si la edad mayor a 65 le diremos que el contenido no es para jubilados, )*/
$edad= 18 ;
if($edad<18){
    echo"No puede acceder a la pagina";
}
else if($edad > 65){
    echo"No puede acceder a la pagina ";
}
else{
    echo"Bienvenido a la pagina";
}
echo "<br>";
echo "<hr>";

$total_letras= strlen("hola, la longitud maxima es de 150 caracteres");
if($total_letras >150){
    echo"error";
} else{
    echo"Se a enviado exitosamente el mensaje";
    
}
echo "<br>";
echo "<hr>";


$edad= 18 ;
if($edad){
    echo"No puede acceder a la pagina";
}
else if($edad > 65){
    echo"No puede acceder a la pagina ";
}
else{
    echo"Bienvenido a la pagina";
}


?>