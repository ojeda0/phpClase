<?php
    // EJ 1.Determinar si un número es positivo, negativo o cero
    // Escribe un script que asigne un número a una variable y 
    // luego determine si el número es positivo, negativo o cero,
    //  mostrando un mensaje adecuado en cada caso.
    function ej1(){

        $numero = -1;

        if($numero < 0){
            echo "Número negativo.<br>";
        }elseif($numero==0){
            echo "El número es 0.<br>";
        }else{
            echo "Número positivo.<br>";
        }

    }
    ej1();


    // EJ 2. Evaluar la nota de un estudiante. Escribe un script 
    // que asigne un valor a una variable nota (entre 0 y 10) y 
    // determine si el estudiante ha suspendido (menos de 5), 
    // aprobado (entre 5 y 6.9), notable (entre 7 y 8.9) o 
    // sobresaliente (entre 9 y 10).
    function ej2(){
        $nota = 9;

        if($nota >= 0 && $nota < 5){
            echo "Nota: $nota <br> Has suspendido.";
        }elseif($nota >= 5 && $nota < 7){
            echo "Nota: $nota <br> Has aprobado.";
        }elseif($nota >= 7 && $nota < 9){
            echo "Nota: $nota <br> Notable.";
        }elseif($nota >= 9 && $nota <= 10){
            echo "Nota: $nota <br> Sobresaliente.";
        }else{
            echo "Introduce una nota válida entre 0 y 10.";
        }
    }
    ej2();

?>