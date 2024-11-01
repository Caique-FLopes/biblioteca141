<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/css/style.css">
    <title>Document</title>
</head>
<body>
    <header id="header-site">
        <div id="box-img">
            <a href="#">
                <img src="./views/src/logo.png" alt="Livraria Borno">
            </a>
        </div>
        
        <nav>
            <button onclick="toggleMenu()">x</button>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Livros</a></li>
                <li><a href="#">Meu Carrinho</a></li>
            </ul>
        </nav>

        <div>
            <a href="#">
                <img src="" alt="">
            </a>
        </div>
    </header>

    <script>
        function toggleMenu(){
            document.querySelector('#header-site nav ul').classList.toggle('ativo');
        }
    </script>