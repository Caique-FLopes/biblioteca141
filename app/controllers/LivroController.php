<?php
require "./config/database.php";
require "./models/Livro.php";

class LivroController{
    public function cadastrarLivro($titulo, $autor, $genero){
        $database = new Banco();
        $bd = $database->conectar();

        $livro = new Livro($bd);
        $livro->titulo = $titulo;
        $livro->autor = $autor;
        $livro->genero = $genero;

        if($livro->cadastrarLivro()){
            header('Location: index.php');
        }else{
            echo "Erro ao cadastrar livro";
        }
    }
}