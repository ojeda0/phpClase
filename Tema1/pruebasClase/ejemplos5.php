<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 10;
        $x += 5;

        echo $x;

        echo "<br>";

        echo ($x>=15) ? "es mayor o igual" : "es menor";

        // if($x === 15) {
        //     echo " es 15";
        // }else{
        //     echo " no es 15.";
        // }

        echo "<br>";

        $nombreUsuario = null;
        $user = $nombreUsuario ?? "sin-nombre";

        echo $user;

    ?>
</body>
</html>