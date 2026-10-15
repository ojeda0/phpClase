<?php
    // EJ 1. Imprimir los números pares entre 1 y 20 usando for
    // Escribe un script que imprima solo los números pares 
    // entre 1 y 20 utilizando un bucle for.

    function ej1(){

        for($i = 1; $i <= 20; $i++){
            if($i%2==0){
                echo $i . "<br>";
            }
        }

    }
    //ej1();


    // EJ 2. Contar vocales en una cadena usando foreach. 
    // Escribe un script que cuente cuántas vocales hay en una 
    // cadena dada. Usa un bucle foreach para recorrer el array 
    // de caracteres.

    function ej2(){

        $frase = "PHP con Jesús";

        $fraseMinusculas = mb_strtolower($frase);

        $fraseArray = mb_str_split($fraseMinusculas);

        $vocales = ['a', 'e', 'i', 'o', 'u', 'á', 'é', 'í', 'ó', 'ú'];

        $encontrados = 0;

        foreach ($fraseArray as $i) {
            if(in_array($i, $vocales)){
                $encontrados++;
            }
        }

        printf("La frase '%s' contiene %d vocales.", $frase, $encontrados);

    }
    //ej2();

?>