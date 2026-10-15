<?php

    $gente = array(
        array("name" => "Abraham", "seed" => 687848),
        array("name" => "Jose", "seed" => 689463)
    );

    for($i = 0; $i < count($gente); $i++){
        $gente[$i]["seed"] = rand(100000, 999999); //Genera número de 6 dígitos
        echo "Nombre: " . $gente[$i]["name"] . ", Semilla: " . $gente[$i]["seed"] . "<br>";
    }

?>