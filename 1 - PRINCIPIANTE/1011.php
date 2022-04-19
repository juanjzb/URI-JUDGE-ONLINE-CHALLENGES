<!-- Esfera 1011 -->
<?php
$radio = fgets(STDIN);
DEFINE ("PI",3.14159);
$volume = number_format((4.0/3.0) * PI * pow($radio,3),3,".","");
echo "VOLUME = $volume\n";

?>