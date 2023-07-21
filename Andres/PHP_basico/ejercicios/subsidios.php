<?php
if (isset($_POST['enviar'])) {
    $estrato = $_POST['estrato'];
    $edad = $_POST['edad'];


        if ($estrato == "1" || $estrato == "2") {
            if ($edad >= 1 && $edad <= 18) {
                echo "Usted tiene derecho a un subsidio de nutrición por un valor de $50,000.";
            } else if ($edad > 18 && $edad < 30) {
                echo "Usted tiene derecho a un subsidio para jóvenes por un valor de $200,000.";
            } else if ($edad >= 60) {
                echo "Usted tiene derecho a un subsidio para adultos mayores por un valor de $100,000.";
            } else {
                echo "Lo siento, usted no cumple con los requisitos para recibir ningún subsidio.";
            }
        } else {
            echo "Lo siento, usted no cumple con los requisitos para recibir ningún subsidio.";
        }
    }
?>