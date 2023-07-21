<?php
/*ciclo while*/
$numero= 1;
while ($numero <= 10) {
    echo $numero;
    $numero = $numero +1;
}
echo "<br>";
echo "<hr>";
/*ciclo do while*/
$numero= 1;
do {
    echo $numero;
    $numero++;

} while ($numero <= 20);
echo "<br>";
echo "<hr>";
/*ciclo for*/


$i= 2;
$numero=2;
while ($i <= 10) {
    echo$i++ * $numero . "<br>";
}

?>