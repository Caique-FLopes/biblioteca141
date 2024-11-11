<article 
class="livro-<?= $dadosLivro['id']; ?>">
    <div 
    class="imgLivro">

    </div>
    <div 
    class="infosLivro">
        <h1><?= $dadosLivro['titulo']; ?></h1>
        <p><?= $dadosLivro['descricao']; ?></p>
        <span>ISBN: <?= $dadosLivro['isbn']; ?></span>
        <a href="index.php?idLivro=<?= $dadosLivro['id']; ?>">Pegar Emprestado</a>
    </div>
</article>