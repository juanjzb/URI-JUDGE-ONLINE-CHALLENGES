<!-- Salario 1008 -->
<?php
$number = intval(fgets(STDIN));
$quantity = doubleval(fgets(STDIN));
$amount = doubleval(fgets(STDIN));
$salary = $quantity * $amount;
$salary = number_format($salary,2,".","");
echo "NUMBER = $number\n";
echo "SALARY = U$ $salary\n"
?>