<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $a = 6;
    if($a === 5): ?>
        <h1>ES UN CINCO</h1>
    <?php elseif($a === 6): ?>
        <h1>ES UN SEIS</h1>
    <?php else: ?>
        <h1>NO SÉ LO QUE ES</h1>
    <?php endif; ?>
</body>
</html>