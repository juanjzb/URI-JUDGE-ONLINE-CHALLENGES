<!-- Cálculo Simple 1010 -->
<?php
$producto1 = explode(" ",fgets(STDIN));
$producto2 = explode(" ",fgets(STDIN));

$codigo1 = $producto1[0];
$unidades1 = intval($producto1[1]);
$precio1 = doubleval($producto1[2]);

$codigo2 = $producto2[0];
$unidades2 = intval($producto2[1]);
$precio2 = doubleval($producto2[2]);

echo "VALOR A PAGAR: R$ " . number_format(($unidades1 * $precio1) + ($unidades2 * $precio2),2,".","") . "\n";

?>