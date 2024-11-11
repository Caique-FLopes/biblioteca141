<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/biblioteca141/app/controllers/LivroController.php";
require_once "../templates/header.php";

if(isset($_GET['id'])){
    $livroController = new LivroController();
    $livroController->buscarLivroUnico($_GET['id']);
    include_once $_SERVER['DOCUMENT_ROOT'] . "/biblioteca141/app/view/templates/templateLivroUnico.php";
}
