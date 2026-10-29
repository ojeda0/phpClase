<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $valores = $_POST['valores'] ?? [];

    ?>

    <h1>Campeones main del Mario</h1>
    <?php if(!empty($valores)): ?>
        <ul>
            <?php foreach ($valores as $valor): ?>
                <li><?php echo $valor ?></li>
            <?php endforeach; ?>
        </ul>
    
    <?php else: ?>

        <p>No has seleccionado ningún valor.</p>

    <?php endif; ?>

</body>
</html>