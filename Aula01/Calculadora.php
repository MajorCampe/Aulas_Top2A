<?php

class Calculadora {
    
    var $valor1;
    var $valor2;
    
    function Calculadora($valor1, $valor2) {
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
    }
    
    function Somar() {
        $soma = $this->valor1 + $this->valor2;
        
        echo "A soma de $this->valor1 com $this->valor2 resulta em: $soma";
    }
    
    function Subtrair() {
        $subtai = $this->valor1 - $this->valor2;
        
        echo "A subtração de $this->valor1 com $this->valor2 resulta em: $subtai";
    }
    
    function Dividir() {
        $divide = $this->valor1 / $this->valor2;
        
        echo "A divisão de $this->valor1 com $this->valor2 resulta em: $divide";
    }
    
    function Multiplicar() {
        $multiplica = $this->valor1 * $this->valor2;
        
        echo "A multiplicação de $this->valor1 com $this->valor2 resulta em: $multiplica";
    }
}
