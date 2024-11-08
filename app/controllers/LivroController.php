<?php
require_once "app/config/database.php";
require_once "app/models/Livro.php";

class LivroController{
    public $database;

    public function conectarBd(){
        $this->database = new Banco();
        return $this->database->conectar();
    }

    public function cadastrarLivro($titulo, $autor, $genero){
        $livro = new Livro($this->conectarBd());
        $livro->titulo = $titulo;
        $livro->autor = $autor;
        $livro->genero = $genero;

        if($livro->cadastrarLivro())
            header("Location: index.php?page=livro&id={$livro->id}");
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
}