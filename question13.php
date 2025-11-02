<?php
$numbers = [5, 12, 8, 0, 15, -3, 20, 7, 9, 11];

echo "Numbers entered: <br>";

foreach ($numbers as $num) {
    if ($num < 0) {
        echo "Negative number encountered: $num<br>";
        echo "Stopping input...";
        break; // Stop when a negative number is found
    }
    echo $num . "<br>";
}
?>
