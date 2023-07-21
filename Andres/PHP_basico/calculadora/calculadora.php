<?php
if (isset($_POST["submit"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = $_POST["operacion"];
    
    switch ($operacion) {
        case "suma":
            $resultado = $num1 + $num2;
            break;
        case "resta":
                $resultado = $num1 - $num2;
            break;
        case "multiplicacion":
                    $resultado = $num1 * $num2;
            break;
        case "division":
            if ($num2 == 0) {
                echo "Error: Division entre cero";
                } else{
                $resultado = $num1 / $num2;
                }
            break;
        
    }
    
    if (isset($resultado)) {
    
        echo "<br><br><strong>Resultado:</strong>" . $resultado;
    }
}

?>