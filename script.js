const formLogin = document.getElementById('form-login');
const formCadastro = document.getElementById('form-cadastro');
const formRecuperacao = document.getElementById('form-recuperacao');

const btnEntrar = document.getElementById('btn-entrar');
const btnCadastrar = document.getElementById('btn-cadastrar');
const esqueceuSenha = document.getElementById('esqueceu-senha');

// Mostrar formulário de login
function formLogin(event){
    formLogin.classList.add('ativo');
    formCadastro.classList.remove('ativo');
    formRecuperacao.classList.remove('ativo');
};

// Mostrar formulário de cadastro
function formCadastro(event) {
    formCadastro.classList.add('ativo');
    formLogin.classList.remove('ativo');
    formRecuperacao.classList.remove('ativo');
};

// Mostrar formulário de recuperação de senha
function formRecpSenha(event) {
    formRecuperacao.classList.add('ativo');
    formLogin.classList.remove('ativo');
    formCadastro.classList.remove('ativo');
};