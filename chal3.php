<?php
$debts = ["younes" => 60, "meriem" => 120, "Yassine" => 80, "Leila" => 250, "Omar" => 30];
$total = 0;

foreach ($debts as $name => $amount) {
    $total += $amount;
    
    echo $name . ": " . $amount . " DH";
    
    if ($amount > 100) {
        echo " --- (KHLASS!)"; 
    }
    
    echo "\n"; 
}

echo "Total: " . $total . " DH";
?>