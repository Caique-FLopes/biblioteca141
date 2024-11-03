<?php

require_once 'app/models/interfaces/Crud.php';

class Usuario implements Crud{
    private $conexao;
    private $tabela = "usuario";

    public $id;
    public $nome;
    public $email;
    public $senha;
    public $dataNascimento;

    public function __construct($bd){
        $this->conexao = $bd;
    }

    public function create(){
        $query = "INSERT INTO {$this->tabela}(nome, email, senha) VALUES('{$this->nome}', '{$this->email}','{$this->senha}')";
        $resultado = $this->conexao->query($query);        
        return $resultado;
    }
    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE email = '{$this->email}'";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }
}