<?php
require_once "app/controllers/LivroController.php";
require_once "app/views/templates/header.php";


if(isset($_GET['idLivro'])){
    require_once 'app/views/templates/templateLivroUnico.php';
} else {
    require_once  'app/views/templates/templateLivros.php';
}

require_once 'app/views/templates/footer.php';