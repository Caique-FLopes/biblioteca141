<form action="index.php?acao=cadastrar-usuario" method="post">
    <div class="row-input">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
    </div>

    <div class="row-input">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
    </div>

    <div class="row-input">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <button onclick="togglePassword(event, this)" id="btn-password">Ver Senha</button>
    </div>

    <div class="row-input">
        <label for="nascimento">Data de nascimento:</label>
        <input type="date" name="nascimento" id="nascimento">
    </div>

    <input type="submit" value="Cadastrar">
</form>