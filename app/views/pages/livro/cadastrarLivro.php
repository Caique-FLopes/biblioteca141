<?php

require_once "app/controllers/LivroController.php";
require_once "app/views/templates/header.php";


if(isset($_GET['acao']) &&  $_GET['acao'] == 'cadastrar'){
    $controller = new LivroController();
    $controller->cadastrarLivro($_POST['titulo'],$_POST['autor'],$_POST['genero'],$_POST['descricao'],$_POST['isbn']);
}else{
    require_once "app/views/templates/forms/formCadastrarLivro.php";
}

require_once "app/views/templates/footer.php";