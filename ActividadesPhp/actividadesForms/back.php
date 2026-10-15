<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Datos recibidos por el formulario:</h2>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $numero = isset($_POST['numero']) ? htmlspecialchars($_POST['numero']) : '';

            if(is_numeric($numero) && $numero !== ''){
                $numeroEntero = (int) $numero;

                echo "<p><strong>Número decimal introducido: </strong>$numero</p>";
                echo "<p><strong>Número entero transformado: </strong>$numeroEntero</p>";
            }else {
                echo "<p>Entrada errónea. Introduce un número válido.</p>";
            }

        }
    ?>
</body>
</html>