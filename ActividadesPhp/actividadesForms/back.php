<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 7</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h2>Datos recibidos por el formulario:</h2>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '';
            $matematicas = isset($_POST['matematicas']) ? htmlspecialchars($_POST['matematicas']) : '';
            $lengua = isset($_POST['lengua']) ? htmlspecialchars($_POST['lengua']) : '';
            $ciencias = isset($_POST['ciencias']) ? htmlspecialchars($_POST['ciencias']) : '';

            $promedio = round(($matematicas + $lengua + $ciencias) / 3, 2);

            $estiloFila = "";
            if($promedio >= 7) {
                $estiloFila = "verde";
            }else if($promedio < 4) {
                $estiloFila = "rojo";
            }

            echo "<table border='1'>
                <thead>
                    <tr>
                        <th>Nombre alumno</th>
                        <th>Nota de matemáticas</th>
                        <th>Nota de lengua</th>
                        <th>Nota de ciencias</th>
                        <th>Promedio</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class='$estiloFila'>
                        <td>$nombre</td>
                        <td>$matematicas</td>
                        <td>$lengua</td>
                        <td>$ciencias</td>
                        <td>$promedio</td>
                    </tr>
                </tbody>
            </table>";
            
        } else {
            echo "<p>No se han recibido los datos por el método POST.</p>";
        }

    ?>
</body>
</html>