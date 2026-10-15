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
            $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '';
            $apellidos = isset($_POST['apellidos']) ? htmlspecialchars($_POST['apellidos']) : '';
            $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
            $contrasena = isset($_POST['contrasena']) ? htmlspecialchars($_POST['contrasena']) : '';
            $sexo = isset($_POST['sexo']) ? htmlspecialchars($_POST['sexo']) : '';
            $profesion = isset($_POST['profesion']) ? htmlspecialchars($_POST['profesion']) : '';
            $herramienta = isset($_POST['herramienta']) ? htmlspecialchars($_POST['herramienta']) : '';
            $comentario = isset($_POST['comentario']) ? htmlspecialchars($_POST['comentario']) : '';
        
        echo "<ul>";
            echo "<li><strong>Nombre: </strong>$nombre</li>";
            echo "<br>";
            echo "<li><strong>Apellidos: </strong>$apellidos</li>";
            echo "<br>";
            echo "<li><strong>E-mail: </strong>$email</li>";
            echo "<br>";
            echo "<li><strong>Contraseña: </strong>$contrasena</li>";
            echo "<br>";
            echo "<li><strong>Sexo: </strong>$sexo</li>";
            echo "<br>";
            echo "<li><strong>Profesión: </strong>$profesion</li>";
            echo "<br>";

            //Mostrar aficiones que es un array
            echo "<li><strong>Aficiones:</strong>";
            if(isset($_POST['aficiones']) && is_array($_POST['aficiones'])) {
                $aficiones = array_map('htmlspecialchars', $_POST['aficiones']);
                echo implode(', ', $aficiones);
            }else {
                echo "<p>Ninguna seleccionada.</p>";
            }
            echo "</li>";
            echo "<br>";

            echo "<li><strong>Herramienta preferida: </strong>$herramienta</li>";
            echo "<br>";

            echo "<li><strong>Comentarios: </strong>$comentario</li>";

        echo "</ul>";

        }else {
            echo "<p>No se han recibido datos por el método POST.</p>";
        }

    ?>
</body>
</html>