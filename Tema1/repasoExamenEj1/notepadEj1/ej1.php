<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 1</title>
</head>
<body>
	<?php
		$producto = "Teclado mecánico";
		$precioUnidad = 49.90;
		$unidades = 3;
		$descuento = 0.10;
		$moneda = "€";
		
		define("IVA", 0.21);
		
		$importeBase = $precioUnidad * $unidades;
		$aplicarIVA = $importeBase * IVA;
		$importeMasIVA = $importeBase + $aplicarIVA;
		
		$importeFinal = $importeMasIVA - ($importeMasIVA * $descuento);
		
		function linea($texto, $valor) {
			global $moneda;
			
			echo "<p><strong>" . $texto . "</strong>" . round($valor, 2) . " " . $moneda . "</p>";
			
		}
	?>
	
	<h1>Resumen de pedido: <?php echo $producto ?></h1>
	<p><?php linea("Importe base: ", $importeBase); ?></p>
	<p><?php linea("IVA (21%): ", $aplicarIVA); ?></p>
	<p><?php linea("Importe con IVA: ", $importeMasIVA); ?></p>
	<p><?php linea("Descuento (10%): ", $importeMasIVA * $descuento); ?></p>
	<p><?php linea("Total a pagar: ", $importeFinal); ?></p>
</body>
</html>