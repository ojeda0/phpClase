<!--EJEMPLO TABLA-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        define("DEBUG", true);

        function mensajeDebug($mensaje){
            if(DEBUG) {
                echo "<br>";
                echo $mensaje;
                echo "<br>";
            }
        }

        function crearFila($constante, $valor){
            echo "<tr>";
                echo "<td>";
                    echo $constante;
                echo "</td>";

                echo "<td>";
                    echo $valor;
                echo "</td>";
            echo "</tr>";
        }
    ?>

    <table border="1">
        <tr>
            <th>CONSTANTE MÁGICA</th>
            <th>VALOR</th>
        </tr>

        <?php
            crearFila("__LINE__", __LINE__);
            mensajeDebug("Tras LINE" . " LÍNEA: " . __LINE__);
            crearFila("__FILE__", __FILE__);
            crearFila("__DIR__", __DIR__);
            crearFila("__PHP_VERSION__", PHP_VERSION);
        ?>
    </table>
    
</body>
</html>