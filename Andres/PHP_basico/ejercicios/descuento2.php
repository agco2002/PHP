<?php
if (isset($_POST['enviar'])) {
    $valor = $_POST['valor'];
    $cantidad = $_POST['cantidad'];

    $sub=$valor*$cantidad;
    $des=0;
    if($cantidad>=0 && $cantidad <=2){
        echo"No tiene descuento" ."<br>";
    }elseif ($cantidad>=2.1 && $cantidad <=5) {
        $des=$sub*0.10;
        echo"Tiene un descuento del 10%:". "".$des."<br>";
    }elseif ($cantidad>5.01 && $cantidad <=10) {
        $des=$sub*0.15;
        echo"Tiene un descuento del 15%:". "".$des."<br>";
    }else {
        $des=$sub*0.20;
        echo"Tine un descuento del 20% " . "" .$des ."<br>"
    }
    $total= $sub-$des;
    echo"El total a pagar es: ".$total;
    
}
?>