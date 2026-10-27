<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulacro 2</title>
</head>
<body>

    <h1>Clasificación de películas</h1>
    <?php
        if($_SERVER['REQUEST_METHOD'] !== 'POST' || 
        empty($_POST['titulo']) || 
        empty($_POST['anyo']) || 
        empty($_POST['duracion'])) {

            echo "<p>No se han recibido datos por el formulario. <a href='entrada.html'>Volver al formulario</a></p>";
            exit;
        }

        $titulos = $_POST['titulo'];
        $anyos = $_POST['anyo'];
        $duraciones = $_POST['duracion'];

        $peliculas = [];
        $filas = min(count($titulos), count($anyos), count($duraciones));

        for($i = 0; $i < $filas; $i++) {
            $titulo = trim($titulos[$i] ?? '');
            $anyo = (int) ($anyos[$i] ?? 0); 
            $duracion = (int) ($duraciones[$i] ?? 0);

            if($titulo !== "" && $anyo > 0 && $duracion > 0) {

                $peliculas[] = [

                    'titulo' => htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8'),
                    'anyo' => $anyo,
                    'duracion' => $duracion

                ];

            }
        }

        function determinarCategoria($anyo, $duracion) {

            $respuesta = "";

            if($anyo >= 2023 && $duracion > 120) {
                $respuesta = "Estreno imperdible";
            }else if($anyo <= 2000) {
                $respuesta = "Clásico reconocido";
            }else {
                $respuesta = "Contenido general";
            }

            return $respuesta;

        }

        if(empty($peliculas)) {
            echo "<p>No hay películas para clasificar. <a href='entrada.html'>Volver</a></p>";
            exit;
        }

    ?>

    <table border="1" cellpadding="5" style="text-align: center;">
        <thead>
            <th>Título</th>
            <th>Año</th>
            <th>Duración</th>
            <th>Categoría</th>
        </thead>

        <tbody>
            <?php foreach($peliculas as $p): ?>
                <?php $categoria = determinarCategoria($p['anyo'], $p['duracion']); ?>
                <tr>
                    <td><?= $p['titulo'] ?></td>
                    <td><?= $p['anyo'] ?></td>
                    <td><?= $p['duracion'] ?></td>
                    <td><span class="badge"><?= $categoria ?></span></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br>

    <a href="entrada.html">Volver al formulario</a>
</body>
</html>