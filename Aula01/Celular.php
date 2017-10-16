<?php

class Celular {
    
    var $nome;
    var $marca;
    var $tela;
    var $hd;
    var $ram;
    var $preco;
    
    function Celular($nome, $marca, $tela, $hd, $ram, $preco) {
        $this -> nome = $nome;
        $this -> marca = $marca;
        $this -> tela = $tela;
        $this -> hd = $hd;
        $this -> ram = $ram;
        $this -> preco = $preco;
    }
    
    function Imprimir() {
        echo "Nome: $this->nome<br>";
        echo "Marca: $this->marca<br>";
        echo "Tela: $this->tela" . " polegadas<br>";
        echo "Memória Interna: $this->hd" . " GB<br>";
        echo "Memória RAM: $this->ram" . " GB<br>";
        echo "Preço: R$". " $this->preco<br>";
    }
    
}
?>
