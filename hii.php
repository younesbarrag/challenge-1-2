<?php
$QUNTITE_TEA = 2;         
$PRICE = 10;        
$student = true;

$TOTAL = $QUNTITE_TEA * $PRICE;  

if ($student) {
    
    $TOTAL = $TOTAL * 0.8; 
}

if ($QUNTITE_TEA > 5) {
    
    $TOTAL = $PRICE * $QUNTITE_TEA -  $QUNTITE_TEA    ; 
}
eCHO "TOTAL_TEA: " . $TOTAL . " DH"; 
?>