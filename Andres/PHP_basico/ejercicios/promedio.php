<?php
if (isset($_POST['calcular'])) {

    $n1 = $_POST["txtN1"];
    $n2 = $_POST["txtN2"];
    $n3 = $_POST["txtN3"];


if ($n1<0 || $n1>5) {
    print "El valor de la nota 1 es incorrecto";
}elseif ($n2<0 || $n2>5) {
    print"El valor de la nota 2 es incorrecto";
}elseif ($n3<0 || $n3>5) {
    print"El valor de la nota 2 es incorrecto";
}
else{
    $prom = ($n1+$n2+$n3)/3;
    print "El promedio es: " .$prom. "<br>";

    if ($prom>=3) {
        print "Gana la materia";
        if ($prom==5) {
            print "Felicitaciones";
        }
    }else{
        print "Pierde la materia";
    }
}
}


?>