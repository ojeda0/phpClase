<?php

    //Obtener valor del radio
    $radio = $_POST["radio"];

    //Calcular el área del círculo
    $area = pi() * $radio * $radio;

    //Mostrar el resultado
    echo "El área del circulo es de " . $area . " unidades cuadradas.";

?>