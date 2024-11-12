<?php

require_once "app/config/database.php";
require_once "app/models/Usuario.php";

class UsuarioController{

    public function conectar(){
        $bd = new Banco();
        return $bd = $bd->conectar();
    }

    public function cadastrarUsuario($nome, $email, $senha){
        $usuario = new Usuario($this->conectar());
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->senha = $senha;

        if($usuario->create()){
            echo '<script> alert("Usuario Cadastrado com sucesso"); </script>';
            header('Location: index.php?acao=usuario');
        }
    }

    public function logarUsuario($email, $senha){
        $usuario = new Usuario($this->conectar());
        $usuario->email = $email;
        $usuario->senha = $senha;
        $resultado = $usuario->read()->fetch_assoc();
        $usuario->id = $resultado['id'];

        if($senha != $resultado['senha']){
            echo '<script>alert("Senha incorreta");<script>';
        }else{
            session_start();
            $_SESSION['usuario_id'] = $resultado['id'];
            header("Location: index.php?acao=usuario&usuario={$usuario->id}");
        }
    }

    public function buscarUsuario($idUsuario){
        $usuario = new Usuario($this->conectar());
        $usuario->id = $idUsuario;
        return $usuario->readUser();
    }
}