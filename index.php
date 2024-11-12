<?php

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch($acao){
    case 'livro':
        require_once 'app/views/pages/livro/livros.php';
        break;
    case 'login':
        require_once 'app/controllers/UsuarioController.php';
        $controller = new UsuarioController();
        $controller->logarUsuario($_POST['usuario'], $_POST['senha']);
        break;
    case 'usuario':
        require_once 'app/controllers/UsuarioController.php';
        require_once 'app/views/pages/usuario/usuario.php';
        break;
    default:
        require_once 'app/views/pages/login.php';
}