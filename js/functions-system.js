const menuOptinsUser = document.getElementById('logo-user')

menuOptinsUser.addEventListener('click', function(event) {
    event.preventDefault();
    container-menu-opcoes.classList.add('ativo');
    container-menu-opcoes.classList.remove('ativo');
});