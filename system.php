<?php
    session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION['user']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['user']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/system.css">
    <script src="js/form-login.js"></script>
    <title>Painel Administrativo</title>
</head>
<body>
    <div class="container">
        <header>
            <div id="logo"><img src="assets/images/black-logo.png" alt="logo-EasyBoobly" width="220px" height="auto"></div>
            <div><img src="assets/images/user.png" alt="logo-user" width="45px" height="auto"></div>
            <div class="minha-div">Clique aqui</div>
        </header>
        <div class="menu-cont">
            <div id="menudeopcoes">
            <p>teste</p>
            </div>
            <div id="content-body">
                <div id="container-menu-opcoes" class="user-logo ativo">
                    <div class="menu-user-opcoes">
                        <div id="info-user">
                            <p><span id="nome-user">Kayri Monteiro</span></p>
                            <p><span id="funcao-user">Admin</span></p>
                        </div>
                        <div id="config-perfil">
                            <p><img src="assets/images/user.png" alt="logo-user" width="25px" height="auto" style="margin-bottom: -7px;"><a href="#" id="edit-perfil">Perfil</a></p>
                        </div>
                        <div id="sairdosystem"><p><img src="assets/images/user.png" alt="logo-user" width="25px" height="auto" style="margin-bottom: -7px;"><a href="config-bd/sair.php" id="sair-system">Sair</a></p></div>
                    </div>     
                </div>
            </div>
        </div>
    </div>
</body>
</html>