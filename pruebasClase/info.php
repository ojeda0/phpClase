<?php
    $unBool = true;
    $unInt = 1;
    $unFloat = 1.5;
    $unString = "¡Hola mundo!";

    echo var_dump($unBool) . "<br>";
    echo var_dump($unInt) . "<br>";
    echo var_dump($unFloat) . "<br>";
    echo var_dump($unString) . "<br>";

    if(is_bool($unBool)) {
        echo "La variable \$unBool es de tipo booleano.<br>";
    }

    if(is_int($unInt)) {
        echo "La variable \$unInt es de tipo entero.<br>";
    }

    if(is_float($unFloat)) {
        echo "La variable \$unFloat es de tipo flotante.<br>";
    }

    if(is_string($unString)) {
        echo "La variable \$unString es de tipo cadena.<br>";
    }

    $foo = (int)"3";
    $bar = 2;
    $resultado = $foo + $bar;
    echo "El resultado de la suma es: $resultado<br>";
    echo var_dump($resultado);
?>