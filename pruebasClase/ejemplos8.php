<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $animales = ["rana", "gato", "búho", "perro", "Perro Sánchez"];
        $tamanyo = count($animales);


        for($i = 0; $i < $tamanyo; $i++){
            echo "<br>" . $animales[$i];
        }

        echo "<br>";

        for($i = $tamanyo-1; $i >= 0; $i--){
            echo "<br>" . $animales[$i];
        }

        echo "<br>";

        $i=0;
        while($i<$tamanyo) {
            echo "<br>" . $animales[$i];
            $i++;
        }

        echo "<br>";

        $i=$tamanyo-1;
        while($i>=0) {
            echo "<br>" . $animales[$i];
            $i--;
        }
    ?>
</body>
</html>