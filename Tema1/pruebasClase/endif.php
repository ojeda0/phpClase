<?php

$usuarioLogueado = true;
$esAdministrador = true;
$nombreUsuario = "Abraham Teba";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        if($usuarioLogueado){
            printf("<h1>¡Bienvenido, $nombreUsuario!</h1>");
        }else{
            printf("<h1>Por favor, inicie sesión.</h1>");
        }
    ?>
    
</body>
</html>