<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $titulos = $_POST['titulo'];
        $anyos = $_POST['anyo'];
        $duraciones = $_POST['duracion'];

        $peliculas = [];
        $filas = min(count($titulos), count($anyos), count($duraciones));

        for($i = 0; $i < $filas; $i++){

            $titulo = $titulos[$i];
            $anyo = $anyos[$i];
            $duracion = $duraciones[$i];

            $peliculas[] = [
                'titulo' => $titulo,
                'anyo' => $anyo,
                'duracion' => $duracion
            ];

        }

        function determinarCategoria($anyo, $duracion){

            $respuesta = "";

            if($anyo >= 2023 && $duracion > 120){
                $respuesta = "Estreno Imperdible";
            }elseif($anyo <= 2000) {
                $respuesta = "Clásico Reconocido";
            }else {
                $respuesta = "Contenido General";
            }

            return $respuesta;

        }

    ?>

    <h1>Clasificación de peliculas</h1>
    <table border="1" cellpadding="10" style="text-align: center;">
        <thead>
            <th>Título</th>
            <th>Año de estreno</th>
            <th>Duración</th>
            <th>Categoría</th>
        </thead>

        <tbody>
            <?php foreach($peliculas as $pelicula): ?>
                <?php $categoria = determinarCategoria($pelicula['anyo'], $pelicula['duracion']); ?>
                <tr>
                    <td><?php echo $pelicula['titulo'] ?></td>
                    <td><?php echo $pelicula['anyo'] ?></td>
                    <td><?php echo $pelicula['duracion'] ?></td>
                    <td><?php echo $categoria ?></td>
                <tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br>

    <a href="entrada.html"><= Volver al formulario</a>
</body>
</html>