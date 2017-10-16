<?php
    
    $a = 135;
    $b = 15;
    $aux;
    if($a > $b) {
        $aux = $a;
        $a = $b;
        $b = $aux;
    }
    echo "$a, $b";
?>