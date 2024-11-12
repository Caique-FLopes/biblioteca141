<?php
session_start();
include 'app/views/templates/header.php';
if($_SESSION['usuario_id']){
    $controller = new UsuarioController();
    $dadosUsuario = $controller->buscarUsuario($_SESSION['usuario_id']);
    require_once 'app/views/templates/forms/formUsuario.php';
    require_once 'app/views/templates/templateLivrosEmprestados.php';
}
include 'app/views/templates/aside.php';
include 'app/views/templates/footer.php';