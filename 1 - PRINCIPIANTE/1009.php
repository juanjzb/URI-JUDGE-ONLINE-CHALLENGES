<!-- Salario con Bonus 1009 -->
<?php
$nombre = fgets(STDIN);
$salario = doubleval(fgets(STDIN));
$ventas = doubleval(fgets(STDIN));
$total = number_format($salario + ($ventas * 0.15),2,".","");
echo "TOTAL = R$ $total\n";
?>