<section
class="sec-livros">
    <?php
        foreach($dadosLivros as $dadosLivro){
            require 'app/views/templates/templateLivroUnico.php';
        }
    ?>
</section>