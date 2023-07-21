<?php
  /*prueba una variable contra una serie de valores hasta que encuentra la coincidencia*/
  echo "sentencia switch";
  echo "<br>";

    $color_favorito = "negro";
    switch ($color_favorito) {
        case 'rojo':
            echo "tu color favorito es el rojo";
            break;
        case 'azul':
            echo "tu color favorito es el azul";
            break;
        case 'verde':
            echo "tu color favorito es el verde";
            break;
        case 'rosado':
            echo "tu color favorito es el rosado";
            break;
        default:
        echo "No se a encontrado el color";
        
    }   

    echo "<br>";
    echo "<hr>";

    //Mostrar los numeros pares de 1 a 50
    for ($par=0; $par <= 100;  $par++) { 
        if ($par % 2 == 0) {
            echo $par."";
        }
    }

    echo "<br>";
    echo "<hr>";
    /*Imprima los numeros del 1 al 10*/
    $i=2;
    while ($i <= 20) {
        echo$i++. "";
    } 
    echo "<br>";
    echo "<hr>";
    /*Un programa quwe imprima las tablas de multiplicar*/
    $i=2;
    $numero=5;
    while ($i <= 10) {
        echo$i++ * $numero ;
    }
    echo "<br>";
    echo "<hr>";
    /*function*/
    /*Una funcion es un conjunto de instrucciones que a lo largo del programa van a ser ejecutadas multitud de veces */
    /*Los parametros son los datos que reciben las funciones */
    function saludo($nombre){
        echo"Hola". $nombre . " eres un programador";
    }
    saludo(" Andres");
?>