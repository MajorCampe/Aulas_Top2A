<?php

class UserModel {
    private $user;
    private $nome;
    private $sobrenome;
    private $cpf;
    private $nascimento;
    private $email;
    private $sexo;
    private $profissao;
    private $idade;
    private $telefone;
    private $celular;
    private $password;
    private $cep;
    private $endereco;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $estado;
    private $observacao;
    
    
    public function __set($propriedade, $valor) {
        $this->$propriedade = $valor;
    }
    public function __get($propriedade) {
        return $this->$propriedade;
    }
    
}
?>