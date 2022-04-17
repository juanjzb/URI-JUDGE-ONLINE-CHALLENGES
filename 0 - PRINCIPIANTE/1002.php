<!-- Área del Círculo 1002 -->
<?php
define("PI","3.14159");
$radio = fgets(STDIN);
$area = number_format(pow($radio,2) * PI, 4, '.', '');
echo "A=$area\n";
?>