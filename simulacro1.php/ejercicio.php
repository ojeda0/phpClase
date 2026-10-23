<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        define("IVA", 0.21);
        $producto = "Monitor";
        $precioUnit = 50.00;
        $uds = 2;
        $descuento = 0.80;
        $moneda = "€";

        $importeBase = $precioUnit * $uds;
        $aplicarIVA = $importeBase * IVA;
        $importeConIVA = $importeBase + $aplicarIVA;
        $importeFinal = $importeConIVA - ($importeConIVA * $descuento);

        function linea($etiqueta, $valor){
            global $moneda;
            $frase = "<p><strong>" . $etiqueta . "</strong>" . number_format($valor, 2) . $moneda . "</p>";
            return $frase;
        }
        echo (linea("Importe base: ", $importeBase));

    ?>
</body>
</html>