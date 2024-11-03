function toggleMenu(){
    document.querySelector('#header-site nav ul').classList.toggle('ativo');
}

function togglePassword(event, button) {
    event.preventDefault();
    const senha = document.getElementById("senha");

    if (senha.getAttribute("type") === "password") {
        senha.setAttribute("type", "text");
        button.textContent = "Ocultar Senha";
    } else {
        senha.setAttribute("type", "password");
        button.textContent = "Ver Senha";
    }
}