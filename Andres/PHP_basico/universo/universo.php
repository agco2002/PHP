<?php

$gravedades = array(
    "mercurio" => 3.7,
    "venus" => 8.87,
    "tierra" => 9.8,
    "marte" => 3.71,
    "jupiter" => 24.79,
    "saturno" => 10.44,
    "urano" => 8.69,
    "neptuno" => 11.15
);

if (isset($_POST['enviar'])) {
    $peso = $_POST['peso'];
    $planeta = $_POST['planeta'];

    if (is_numeric($peso) && $peso > 0) {
        $peso_en_planeta = $peso * $gravedades[$planeta] / 9.8;
        echo "<p>Tu peso en " . ucfirst($planeta) . " es de " . round($peso_en_planeta, 2) . " kg.</p>";
    } else {
        echo "<p>Por favor ingresa un peso válido.</p>";
    }

}




?>