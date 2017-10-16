<?php

    $altura = 1.69;
    $sexo = "Masculino";
    $IMC;
    
    if($sexo == "Masculino") {
        $IMC = (72.7 * $altura) - 58;
    } else {
        $IMC = (62.1 * $altura)  - 44;
    }
    echo $IMC;
?>