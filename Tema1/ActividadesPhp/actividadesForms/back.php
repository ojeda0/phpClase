<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 7</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h2>Ecuación de segundo grado:</h2>
    <p>ax² + bx + c = 0</p>

    <?php

        if($_SERVER["REQUEST_METHOD"] === "GET"){

            $a = isset($_GET['parametro-a']) ? htmlspecialchars($_GET['parametro-a']) : '';
            $b = isset($_GET['parametro-b']) ? htmlspecialchars($_GET['parametro-b']) : '';
            $c = isset($_GET['parametro-c']) ? htmlspecialchars($_GET['parametro-c']) : '';




        }

    ?>
</body>
</html>