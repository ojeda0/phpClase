<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 2</title>
</head>
<body>

    <?php
        /*Calcula la nota media de un array de calificaciones
        $notas lista numerica de notas*/ 

        function calcularMedia(array $notas): float {

            $suma = count($notas) == 0 ? 0.0 : array_sum($notas);

            return round($suma/count($notas), 2);

        }
        
        $notas = [8.0, 7.4, 9, 9.3];
        $media = calcularMedia($notas);
    ?>

    <h2>MEDIA</h2>
    <p>Las notas son: <?php echo implode(", ", $notas) ?></p>
    <p><strong>Nota media: </strong><?php echo $media ?></p>

</body>
</html>