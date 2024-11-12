<form action="index.php?acao=usuario&form=atualizar" method="post" id="formInfoUsuario">
    <header id="headerFormUsuario">
        <div id="imgUsuarioForm">
            <img src="" alt="">
        </div>
        <h2><?= $dadosUsuario['nome'] ?></h2>
    </header>
    <div id="infosUsuarioForm">
        <div class="row-input">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= $dadosUsuario['email'] ?>" disabled>
        </div>

        <div class="row-input">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" value="<?= $dadosUsuario['senha'] ?>">
        </div>

        <div class="row-input">
            <label for="dataNasc">Data de Nascimento:</label>
            <input type="date" id="dataNasc" name="dataNasc" value="<?= $dadosUsuario['dataNasc'] ?>">
        </div>
    </div>
    <input type="submit" value="Atualizar">
</form>