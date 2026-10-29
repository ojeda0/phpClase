<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Bidimensional</title>
</head>
<body>

    <?php

        $alumnos = [
            ["nombre" => "Abraham", "dwec" => 8.0, "dwes" => 8.5],
            ["nombre" => "Mario", "dwec" => 9.0, "dwes" => 7.0],
            ["nombre" => "Miguel", "dwec" => 5.0, "dwes" => 7.3],
        ];

    ?>

    <table border=1 cellpadding=10>
        <thead>
            <th>Nombre</th>
            <th>Nota DWEC</th>
            <th>Nota DWES</th>
        </thead>
        <tbody>
            <?php foreach($alumnos as $alumno): ?>
            <tr>
                <td><?php echo $alumno['nombre'] ?></td>
                <td><?php echo $alumno['dwec'] ?></td>
                <td><?php echo $alumno['dwes'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</body>
</html>