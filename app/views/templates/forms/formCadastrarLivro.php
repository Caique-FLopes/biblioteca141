<form action="index.php?acao=cadastrar" method="post">
    <label for="titulo">Titulo do Livro:</label>
    <input type="text" name="titulo" id="titulo">
    
    <label for="autor">Autor do Livro:</label>
    <input type="text" name="autor" id="autor">
    
    <label for="genero">Gênero do Livro:</label>
    <input type="text" name="genero" id="genero">

    <label for="isbn">ISBN do Livro:</label>
    <input type="text" name="isbn" id="isbn">
    
    <label for="descricao">Descrição do Livro:</label>
    <textarea name="descricao" id="descricao"></textarea>

    <input type="submit" value="Cadastrar Livro">
</form>