<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function test(){

            $foo = "variable local";

            echo '$foo contexto local: ' . $foo;

            echo "<br>";

            echo '$foo contexto global: ' . $GLOBALS["foo"];

        }

        $foo = "variable global";
        test();

        echo "<br>";

        $foo2 = "segunda variable global";
        function test2(){

            global $foo2;

            echo '$foo contexto global: ' . $foo2;

        }

        $foo = "variable global";
        test2();

    ?>
</body>
</html>