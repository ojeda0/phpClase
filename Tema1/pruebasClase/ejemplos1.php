<!--EJEMPLO 1-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Constante-->
    <?php
        define("NOMBRE", "Abraham");

        echo "<h1>" . NOMBRE . "</h1>";

        //Linea de arriba pero de otra forma
        echo "<h1>";
        mostrarNombre();
        echo "</h1>";
    ?>

    <!--Podemos seguir con html despues de cerrar etiqueta-->
    <h2>Seguimos con HTML</h2>
    <?php echo NOMBRE; ?>

    <br>

    <!--Crear funcion y llamarla-->
    <?php
        function mostrarNombre() {
            echo NOMBRE;
        }

        mostrarNombre();
    ?>
</body>
</html>