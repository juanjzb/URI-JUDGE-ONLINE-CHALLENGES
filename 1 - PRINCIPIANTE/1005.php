<!-- Promedio 1 1005 -->
<?php
$a = fgets(STDIN) * 3.5;
$b = fgets(STDIN) * 7.5;
$promedio = number_format(($a+$b)/11,5,".","");
echo "MEDIA = $promedio\n";
?>