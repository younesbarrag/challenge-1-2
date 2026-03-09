<?php

function manualreverse($text) {
        
   return implode('', array_reverse(str_split($text)));      
}         

echo manualreverse("younes");








?>