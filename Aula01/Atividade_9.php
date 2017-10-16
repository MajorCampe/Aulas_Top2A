<?php

    function Fat($numf) {
        $aux = $numf- 1;
        while($aux > 1){
            $numf = $numf * $aux;
            $aux--;
        }
        return $numf;
    }
    echo Fat(6);
?>