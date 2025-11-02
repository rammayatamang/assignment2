<?php
$num = (int)readline("Enter a number: ");
$fact = 1;
$i = 1;
do {
    $fact *= $i;
    $i++;
} while ($i <= $num);
echo "Factorial of $num is $fact";
?>
