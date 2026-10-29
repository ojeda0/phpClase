<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $producto = "Portátil";
        $precioUnit = 900.00;
        $uds = 2;
        $descuento = 0.10;
        $moneda = "€";

        define("IVA", 0.21);

        $importeBase = $precioUnit * $uds;
        $precioIVA = $importeBase * IVA;
        $importeConIVA = $importeBase + $precioIVA;

        $importeFinal = $importeConIVA - ($importeConIVA * $descuento);

        function linea($texto, $valor) {

            global $moneda;

            echo "<p><strong>" . $texto . "</strong>" . $valor . $moneda . "</p>";

        }
    ?>

    <h1>Resumen de pedido: <?php echo $producto ?></h1>
    <?php linea("Importe base: ", $importeBase); ?>
    <?php linea("IVA (21%): ", $precioIVA); ?>
    <?php linea("Importe con IVA: ", $importeConIVA); ?>
    <?php linea("Descuento (10%): ", $importeConIVA * $descuento); ?>
    <?php linea("Total a pagar: ", $importeFinal); ?>
</body>
</html>