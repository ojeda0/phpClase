<?php
    $categorias = ["Electrónica", "Ropa", "Hogar", "Deporte"];

    $categorias[] = "Libros";

    // foreach($categorias as $categoria) {

    //     echo $categoria . "<br>";

    // }

    //Mostrar primero y ultimo
    echo $categorias[0];
    echo "<br>";
    echo $categorias[count($categorias)-1];

?>