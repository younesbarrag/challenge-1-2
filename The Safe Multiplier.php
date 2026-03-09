
<?php

function  multiplyNumbers($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return "Error: invalid input";
    }

   


}
echo multiplyNumbers(5, 10)."<br>";    
 echo multiplyNumbers(5, "apple");
?>