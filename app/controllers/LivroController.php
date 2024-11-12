<?php
require_once "app/config/database.php";
require_once "app/models/Livro.php";

class LivroController{

    public function conectarBd(){
        $database = new Banco();
        return $database->conectar();
    }

    public function cadastrarLivro($titulo, $autor, $genero, $descricao, $isbn){
        $livro = new Livro($this->conectarBd());
        $livro->titulo = $titulo;
        $livro->autor = $autor;
        $livro->genero = $genero;
        $livro->descricao = $descricao;
        $livro->isbn = $isbn;

        if($livro->create())
            header("Location: index.php?acao=livro&isbn={$livro->isbn}");
        else
            echo "Erro ao cadastrar livro";
    }

    public function buscarLivroUnico($isbn){
        $livro = new Livro($this->conectarBd());
        $livro->isbn = $isbn;
        return  $livro->read();
    }

    public function buscarLivros(){
        $livro = new Livro($this->conectarBd());
        return $livro->readAll();
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