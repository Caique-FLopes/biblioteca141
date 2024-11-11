<?php
require_once "app/models/interfaces/Crud.php";

class Livro implements Crud{
    private $conexao;
    private $tabela = 'livro';

    public $id;
    public $titulo;
    public $autor;
    public $descricao;
    public $genero;
    public $isbn;

    public function __construct($bd){
        $this->conexao = $bd;
    }

    public function create(){
        $query = "INSERT INTO {$this->tabela} (titulo, autor, genero, isbn) values ('{$this->titulo}','{$this->autor}', '{$this->genero}', {$this->isbn});";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }

    public function read(){
        $query = "SELECT * FROM {$this->tabela} WHERE id = {$this->id};";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_assoc();
    }

    public function readAll(){
        $query = "SELECT * FROM {$this->tabela};";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function update($arrayInfos){
        $query = "UPDATE FROM {$this->tabela} SET ";
        $posicao = 0;
        $colunas = array_keys($arrayInfos);
        while($posicao < count($arrayInfos)){
            $query .= "{$colunas[$posicao]} = '{$arrayInfos[$colunas[$posicao]]}' ";
            $posicao++;
        }
        $query .= "WHERE id = {$this->id}";
        $resultado = $this->conexao->query($query);
        return $resultado;
    }

    public function delete(){
        $query = "DELETE FROM {$this->tabela} WHERE id = {$this->id}";
    }
}