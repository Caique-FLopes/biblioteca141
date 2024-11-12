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
    public function readUser(){
        $query = "SELECT * FROM {$this->tabela} WHERE id = '{$this->id}'";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_assoc();
    }
    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE email = '{$this->email}'";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }

    public function update($arrayInfos){
        return;
    }

    public function delete(){
        return;
    }
}