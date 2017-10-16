<?php

class Filmes {
    
    var $titulo;
    var $diretor;
    var $ator;
    var $genero;
    
    function Filmes($titulo, $diretor, $ator, $genero) {

        $this->titulo = $titulo;
        $this->diretor = $diretor;
        $this->ator = $ator;
        $this->genero = $genero;
    }
    
    
}

?>