<?php
    // EJ 1. Bloque de actividades de arrays de PHP. 
    // Actividad 1: Crear un array asociativo. 
    // Crea un array asociativo con información de una persona, 
    // que incluya su nombre, edad y ciudad. Luego, imprime 
    // cada valor del array accediendo a sus claves.


    function ej1(){

        $personas = [
            [
                "nombre" => "Abraham Teba Ojeda",
                "edad" => 25,
                "ciudad" => "Alcalá de Guadaíra"
            ],
            [
                "nombre" => "Mario García Santos",
                "edad" => 21,
                "ciudad" => "El Viso del Alcor"
            ]
        ];

        foreach($personas as $i){
            printf("Nombre: %s, Edad: %d, Ciudad: %s. <br>", $i["nombre"], $i["edad"], $i["ciudad"]);
        }

    }
    //ej1();


    // EJ 2. Bloque de actividades de arrays de PHP. 
    // Actividad 1: Crear un array asociativo. 
    // Crea un array asociativo con información de una persona, 
    // que incluya su nombre, edad y ciudad. Luego, imprime 
    // cada valor del array accediendo a sus claves.
    function ej2(){
        $frutas = ["manzana", "plátano", "naranja"];

        foreach($frutas as $i => $frutaActual){
            printf("Índice [%d] del array: %s<br>", $i, $frutaActual);
        }
    }
    //ej2();


    // EJ 3. 3: Iterar un array con foreach. Crea un array que 
    // contenga los nombres de tres ciudades. Luego, usa un bucle 
    // foreach para imprimir cada ciudad.
    function ej3(){
        $ciudades = ["Sevilla", "Cádiz", "Badajoz"];

        foreach($ciudades as $i => $ciudadActual){

            printf("Posición [%d]: %s<br>", $i, $ciudadActual);

        }

    }
    //ej3();


    // EJ 4. Acceder a un array multidimensional. Crea un array 
    // multidimensional que contenga información sobre frutas y vehículos. 
    // Luego, accede a un elemento específico del array y 
    // muéstralo en pantalla.
    function ej4(){
        $almacen = [
            "frutas" => ["manzana", "pera", "naranja"],
            "vehiculos" => ["audi", "mercedes", "ford"]
        ];

        $frutaElegida = $almacen["frutas"][0];
        $vehiculoElegido = $almacen["vehiculos"][2];

        printf("Fruta elegida: %s.<br>
        Vehículo elegido: %s.<br>", $frutaElegida, $vehiculoElegido);

    }
    //ej4();


    // EJ 5. Modificar y eliminar elementos en un array. Crea 
    // un array que contenga tres números. Luego, modifica el 
    // primer elemento, añade un nuevo número al final del 
    // array y elimina el segundo elemento.

    function ej5(){
        $numeros = [11, 20, 15];
        print_r($numeros);
        echo "<br>";

        $numeros[0] = 5; //Cambiamos el elemento 0 del array
        print_r($numeros);
        echo "<br>";

        $numeros[] = 34; //Añadimos uno al final
        print_r($numeros);
        echo "<br>";

        unset($numeros[3]);
        print_r($numeros);
        echo "<br>";

    }
    //ej5();


    // EJ 6. Reindexar un array después de eliminar elementos.
    // Crea un array con cuatro colores. Luego, elimina el 
    // tercer elemento y reindexa el array usando array_values().
    function ej6() {
        $colores = ["Rosa", "Verde", "Rojo", "Azul"];
        print_r($colores);

        echo "<br>";

        unset($colores[2]);
        print_r($colores);

        echo "<br>";

        $colores = array_values($colores);
        print_r($colores);
    }
    ej6();

?>