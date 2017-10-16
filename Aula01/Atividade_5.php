<?php
    
    $n1 = 7.0;
    $n2 = 9.9;
    $n3 = 10.0;
    $n4 = 1.0;
    $media;
    
    $media = ($n1 + $n2 + $n3 + $n4) / 2.0;
    
    if($media >= 7.0) {
        echo "Aprovado";
    } else if($media < 7.0 && $media >= 5.0) {
        echo "Recuperação";
    } else {
        echo "Reprovado";
    }
    
?>