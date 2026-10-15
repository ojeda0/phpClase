<?php
    $arrayPrueba = ["Abraham", "Mario", "Rubén"];
    
    foreach($arrayPrueba as $i) {
        echo $i . "\n";
    }
    
    echo "<br><br>";

    $arrayAsociativo = ["a" => 1, "b" => 2];

    foreach($arrayAsociativo as $i => $valor) {
        echo "$i => $valor\n";
    }
?>