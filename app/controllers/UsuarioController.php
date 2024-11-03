<?php

require_once "app/config/database.php";
require_once "app/models/Usuario.php";

class UsuarioController{
    public function cadastrarUsuario($nome, $email, $senha){
        $bd = new Banco();
        $bd = $bd->conectar();

        $usuario = new Usuario($bd);
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->senha = $senha;
        $usuario->dataNascimento = $dataNascimento;

        if($usuario->create()){
            echo '<script> alert("Usuario Cadastrado com sucesso"); </script>';
            header('Location: index.php?acao=usuario');
        }
    }
}