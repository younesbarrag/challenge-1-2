<?php
$number = 0;
for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        $number++;
    }   
}

echo "  Number of even numbers between 1 and 50: " . $number;


?>      