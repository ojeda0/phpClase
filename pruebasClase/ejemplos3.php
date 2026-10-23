<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $var = "Hola";
        echo $var;
        $var2 = "";

        echo "<br>";

        echo isset($var2);

        echo "<br>";

        // isset es true si existe la variable, no es null y no 
        // está vacía (es cadena vacía o tenga un valor de inicio).

        // isset es falso si no existe la variable o es null.

        unset($var2);
        echo isset($var2);

        $var3 = trim(" ds ");

        if(empty($var3)){
            echo "Variable vacía";
        }else{
            echo "Está llena";
        }

        echo "<br>";

        var_dump($var3);

    ?>
</body>
</html>