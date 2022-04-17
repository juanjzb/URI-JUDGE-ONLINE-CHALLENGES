<!-- Promedio 2 1006 -->
<?php
$a = fgets(STDIN) * 2;
$b = fgets(STDIN) * 3;
$c = fgets(STDIN) * 5;
$promedio = number_format(($a+$b+$c)/10,1,".","");
echo "MEDIA = $promedio\n";
?>

