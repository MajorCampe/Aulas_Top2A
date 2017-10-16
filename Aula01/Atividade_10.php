<?php

    $a = 34;
    $b = 15;
    $aux;
    if($a > $b) {
        $aux = $a;
        $a = $b;
        $b = $aux;
    }
    for($i = $a+1; $i < $b; $i++) {
        echo "$i\n";
    }
?>