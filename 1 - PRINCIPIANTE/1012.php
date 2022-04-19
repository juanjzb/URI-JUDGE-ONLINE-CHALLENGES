<!-- Area 1012 -->
<?php
$valores = fgets(STDIN);
$valores = explode(" ",$valores);
$a = $valores[0];
$b = $valores[1];
$c = $valores[2];

DEFINE("PI",3.14159);

$triangulo = number_format(($a * $c) / 2,3,".","");
$circulo = number_format(PI * pow($c,2),3,".","");
$trapecio = number_format((($a + $b) * $c)/2,3,".","") ;
$cuadrado = number_format(pow($b,2),3,".","") ;
$rectangulo = number_format($a * $b,3,".","");

echo "TRIANGULO: $triangulo\n";
echo "CIRCULO: $circulo\n";
echo "TRAPEZIO: $trapecio\n";
echo "QUADRADO: $cuadrado\n";
echo "RETANGULO: $rectangulo\n";

?>