<?php


class Programacao {
    var $horarios;
    var $filme;
    
    function Programacao($filme, $horarios) {
        $this->filme = $filme;
        $this->horarios = $horarios;
    }
    
    function Valor() {
        if ($this->horarios >= 2000) {
            return 22;
        }
        else {
            return 16;
        }
    }
    
}

?>