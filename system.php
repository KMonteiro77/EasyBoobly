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
    <script src="js/functions-system.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Painel Administrativo</title>
</head>
<body>
    <div class="container">
        <header>
            <div id="logo"><img src="assets/images/black-logo.png" alt="logo-EasyBoobly" width="220px" height="auto"></div>
            <div id="user-logo" onclick="displayMenu()"><img src="assets/images/user.png" alt="logo-user" width="45px" height="auto"></div>
        </header>
        <div class="menu-cont">
            <div id="menudeopcoes">
                <div class="main-item-menu">
                    <div class="item-menu1">
                        <ul>
                            <li id="itens-list">
                                <div id=title-menu>
                                    <i class="fa-regular fa-star" style="padding-top: 0.8vh; padding-right: 0.9vh;"></i><p>Opções do Formulário</p><i class="fa-regular fa-circle-right" style=" padding-left: 4vh; padding-top: 1vh;"></i>
                                </div>
                                <div id="inputs-itens">
                                    <input type="radio" name="item" class="sub-item"><p>Sub Item 1</p><br>
                                    <input type="radio" name="item" class="sub-item"><p>Sub Item 2</p><br>
                                    <input type="radio" name="item" class="sub-item"><p>Sub Item 3</p><br>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="content-body">
                <div id="container-menu-opcoes">
                    <div class="menu-user-opcoes" style="display: none;">
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