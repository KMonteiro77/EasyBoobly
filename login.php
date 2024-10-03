<?php 

if(isset($_POST['submit'])){
    // print_r("user: " . $_POST['username-cadastro']);
    // print_r('<br>');
    // print_r("email: " . $_POST['email-cadastro']);
    // print_r('<br>');
    // print_r("senha: " . $_POST['password-cadastro']);

    include_once("valid-login.php");

    $name = $_POST['username-cadastro'];
    $senha = $_POST['password-cadastro'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(username_cadastro,senha_cadastro) VALUES ('$name','$senha')");

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/icon.png">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <title>EasyBoobly</title>
</head>
<body id="body-login">
    <div class="container">
        <div class="container-form">
            <div class="form">
                <header>
                    <div id="acessos">
                        <div id="logo">
                            <img src="assets/images/full-white-logo.png" alt="logo-EasyBoobly" width="230px" height="auto">
                        </div>
                        <div id="logins">
                            <a href="#" id="btn-cadastrar" class="login-button">Cadastrar</a>
                            <span class="divider">/</span>
                            <a href="#" id="btn-entrar" class="login-button">Entrar</a>
                        </div>
                    </div>
                </header>

                <main>
                    <section id="section-form">

                        <!-- Formulário de Login -->
                        <form id="form-login" class="formulario ativo" method="POST" action="teste-login.php" >
                            <div id="item-forms">
                                <div id="text-form"> 
                                    <label for="user" id="label-user">Usuário</label>
                                    <input type="text" name="user-login" class="input-user-login usuario" placeholder="Digite o nome de usuário" required>
                                    <label for="password" id="label-senha">Senha</label>
                                    <input type="password" name="password-login" class="input-user-login senha" placeholder="Digite sua senha" required>
                                    <a href="#" id="esqueceu-senha">Esqueci minha senha</a>
                                </div>
                                <button type="submit" name="submit" value="submit" class="custom-btn btn-3"><span>Acessar</span></button>
                            </div>
                        </form>

                        <!-- Formulário de Cadastro -->
                        <form id="form-cadastro" class="formulario" method="POST" action="login.php">
                            <div id="item-forms">
                                <div id="text-form">
                                    <label for="username" id="label-username">Nome de usuário</label>
                                    <input type="text" name="username-cadastro" class="input-user-login" placeholder="Crie um nome de usuário" required>
                                    <label for="email" class="label-form-cadastro" id="label-email">E-mail</label>
                                    <input type="email" name="email-cadastro" class="input-user-login" placeholder="Digite seu e-mail" required>
                                    <label for="password-cadastro" class="label-form-cadastro" id="label-password-cadastro">Senha</label>
                                    <input type="password" name="password-cadastro" class="input-user-login" placeholder="Crie uma senha" required> 
                                </div>
                                <button type="submit" name="submit" class="custom-btn btn-3"><span>Cadastrar</span></button>
                            </div>
                        </form>

                        <!-- Formulário de Recuperação de Senha -->
                        <form id="form-recuperacao" class="formulario" method="POST" action="login.php">
                            <div id="item-forms">
                                <div id="text-form">
                                    <label for="email-recuperacao" id="label-email-recuperacao">E-mail para recuperação</label>
                                    <input type="email" name="email-recuperacao" class="input-user-login" placeholder="Digite seu e-mail" required>
                                </div>
                                <button type="submit" class="custom-btn btn-3"><span>Recuperar Senha</span></button>
                            </div>
                        </form>
                    </section>
                </main>
            </div>
        </div>
    </div>
</body>
</html>
