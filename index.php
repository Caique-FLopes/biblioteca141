<?php

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch($acao){
    case 'cadastrar':

    default:
        include 'app/views/pages/livros.php';
}