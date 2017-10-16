<?php
    
    $a = 10;
    $b = 15;
    $c = 5;
    $d = -7;
    
    $soma = $a + $d;
    $divi = $b / $c;
    
    if($soma > $divi) {
        echo "Maior";
    } else if($soma < $divi) {
        echo "Menor";
    } else {
        echo "Igual";
    }
?>

