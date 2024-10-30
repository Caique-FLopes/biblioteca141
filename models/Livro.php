<?php
require "../config/database.php";

class Livro{
    private $conexao;
    private $tabela = 'livro';

    public $id;
    public $titulo;
    public $autor;
    public $descricao;
    public $genero;
    
    public function __construct($bd){
        $this->conexao = $bd;
    }

    public function getIdLivro($id){
        $query = "SELECT * FROM {$this->tabela} WHERE id = {$this->id};";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function registrarLivro(){
        $query = "INSERT INTO {$this->tabela} (titulo, autor, genero) values ({$this->titulo},{$this->autor}, {$this->genero});";
        return $this->conexao->query($query);
    }
}

$banco = new Banco();
$livro = new Livro($banco->conectar());
$livro->id = 1;
echo "<pre>";
var_dump($livro->getIdLivro($livro->id));
echo "</pre>";
