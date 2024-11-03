<?php

require_once 'app/controllers/LivroController.php';
require_once 'app/controllers/UsuarioController.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch($acao){
    case 'cadastrar':
        $livroController = new LivroController();
        $livroController->cadastrarLivro($_POST['titulo'], $_POST['autor'], $_POST['genero']);
        break;
    case 'cadastrar-usuario':
        $usuarioController = new UsuarioController();
        $usuarioController->cadastrarUsuario($_POST['nome'],$_POST['email'], $_POST['senha'], $_POST['nascimento']);
    case 'usuario':
        include 'app/views/usuario/usuario.php';
    case 'login':
        $usuarioController = new UsuarioController();
        $usuarioController->logarUsuario($_POST['usuario'], $_POST['senha']);
    default:
        include 'app/views/login/login.php';
}