<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $resultado = 45 / 97897;
        echo $resultado;

        echo "<br>";

        printf("La operación da %.6f", $resultado);

        $array = ["perro", "gato", "pájaro"];

        echo "<br>";
        
        print_r($array);
    ?>

</body>
</html>