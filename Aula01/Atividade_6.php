<?php

    $gasolina = 4.1;
    $alcool = 3.2;
    
    $total = $gasolina * 0.7;
    
    if($total > $alcool) {
        echo "Abasteça com alcool";
    } else {
        echo "Abasteça com gasolina";
    }
?>