<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/biblioteca141/app/config/database.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/biblioteca141/app/models/Livro.php";

class LivroController{
    public $database;

    public function conectarBd(){
        $this->database = new Banco();
        return $this->database->conectar();
    }

    public function cadastrarLivro($titulo, $autor, $genero, $descricao, $isbn){
        $livro = new Livro($this->conectarBd());
        $livro->titulo = $titulo;
        $livro->autor = $autor;
        $livro->genero = $genero;
        $livro->descricao = $descricao;
        $livro->isbn = $isbn;

        if($livro->create())
            header("Location: livros.php?acao=livro&id={$livro->id}");
        else
            echo "Erro ao cadastrar livro";
    }

    public function buscarLivroUnico($idLivro){
        $livro = new Livro($this->conectarBd());
        $livro->id = $idLivro;

        if($livro->read())
            header("Location: index.php?page=listar-livros&id={$livro->id}");
        else
            echo  "Livro não encontrado";
    }

    public function atualizarLivro($idLivro, $arrayInfos){
        $livro = new Livro($this->conectarBd());
        $livro->id = $idLivro;

        if($livro->read())
            $livro->update($arrayInfos);
    }

    public function deletarLivro($idLivro){
        $livro = new Livro($this->conectarBd());
        $livro->id = $idLivro;

        if($livro->read())
            $livro->delete();
    }

    public function renderTemplateLivro($idLivro){
        if($this->buscarLivroUnico($idLivro))
            require_once $_SERVER['DOCUMENT_ROOT'] . "/biblioteca141/app/models/Livro.php";
    }
}