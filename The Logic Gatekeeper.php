<?php



function isadult($age){
    if ($age == 18 || 18 < $age) {
        return "Access Granted";
    } else {
        return "Access Denied.";
    }
}
echo isadult(17);

?>