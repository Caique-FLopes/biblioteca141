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

    public function logarUsuario($email, $senha){
        $bd = new Banco();
        $bd = $bd->conectar();

        $usuario = new Usuario($bd);
        $usuario->email = $email;
        $usuario->senha = $senha;
        $resultado = $usuario->read()->fetch_assoc();
        $usuario->id = $resultado['id'];

        if($senha != $resultado['senha'])
            echo '<script>alert("Senha incorreta");<script>';
        else
            header("Location: index.php?page=usuario&usuario={$usuario->id}");
    }
}