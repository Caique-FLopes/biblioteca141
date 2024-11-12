<?php
require_once "app/controllers/LivroController.php";
require_once "app/views/templates/header.php";

if(isset($_GET['isbn'])){
    $controller = new LivroController();
    $dadosLivro = $controller->buscarLivroUnico($_GET['isbn']);
    echo '<section class="sec-livros unico">';
    require_once 'app/views/templates/templateLivroUnico.php';
    echo '</section>';
} else {
    $controller = new LivroController();
    $dadosLivros = $controller->buscarLivros();
    require_once  'app/views/templates/templateLivros.php';
}

require_once 'app/views/templates/aside.php';
require_once 'app/views/templates/footer.php';