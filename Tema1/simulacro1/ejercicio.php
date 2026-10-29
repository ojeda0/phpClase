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
        $precioUnit = 49.90;
        $uds = 3;
        $descuento = 0.90;
        $moneda = "€";

        $importeBase = $precioUnit * $uds;
        $aplicarIVA = $importeBase * IVA;
        $importeConIVA = $importeBase + $aplicarIVA;

        $descuentoFinal = $importeConIVA - ($importeConIVA * $descuento);

        function linea($etiqueta, $valor){
            global $moneda;
            $frase = "<p><strong>" . $etiqueta . "</strong>" . number_format($valor, 2) . $moneda . "</p>";
            return $frase;
        }
        
        echo "<h1>Resumen de pedido: " . $producto . "</h1>";
        echo (linea("Importe base: ", $importeBase));
        echo (linea("IVA (21%): ", $aplicarIVA));
        echo (linea("Importe con IVA: ", $importeConIVA));
        echo (linea("Descuento (10%): ", $importeConIVA * $descuento));
        echo (linea("Total a pagar: ", $importeConIVA - $descuentoFinal));


    ?>
</body>
</html>