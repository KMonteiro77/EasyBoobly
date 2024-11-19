document.addEventListener('DOMContentLoaded', function() {
    const formLogin = document.getElementById('form-login');
    const formCadastro = document.getElementById('form-cadastro');
    const formRecuperacao = document.getElementById('form-recuperacao');

    const btnEntrar = document.getElementById('btn-entrar');
    const btnCadastrar = document.getElementById('btn-cadastrar');
    const esqueceuSenha = document.getElementById('esqueceu-senha');

    // Alterna entre formularios ao clicar nos botões
    btnEntrar.addEventListener('click', function(event) {
        event.preventDefault();
        formLogin.classList.add('ativo');
        formCadastro.classList.remove('ativo');
        formRecuperacao.classList.remove('ativo');
    });

    btnCadastrar.addEventListener('click', function(event) {
        event.preventDefault();
        formCadastro.classList.add('ativo');
        formLogin.classList.remove('ativo');
        formRecuperacao.classList.remove('ativo');
    });

    esqueceuSenha.addEventListener('click', function(event) {
        event.preventDefault();
        formRecuperacao.classList.add('ativo');
        formLogin.classList.remove('ativo');
        formCadastro.classList.remove('ativo');
    });
});

// Validação básica do formulário de cadastro
document.querySelector("form").addEventListener("submit", function(event) {
    let username = document.querySelector("input[name='username']").value;
    let email = document.querySelector("input[name='email']").value;
    let password = document.querySelector("input[name='password-cadastro']").value;

    if (username === "" || email === "" || password === "") {
        alert("Todos os campos devem ser preenchidos.");
        event.preventDefault(); // Impede o envio do formulário
    } else if (!email.includes("@")) {
        alert("Por favor, insira um e-mail válido.");
        event.preventDefault();
    } else if (password.length < 6) {
        alert("A senha deve ter pelo menos 6 caracteres.");
        event.preventDefault();
    }
});

// Função de campos requeridos

function VerificaRequeridos(event){
    let campoDeCadastroUser = Document.getElementById('label-email');
    campoDeCadastroUser.value = ""

    if(campoDeCadastroUser.value == ""){
        alert("preencha o campo email");
    } else {
        alert("tudo certo");
    }

}
