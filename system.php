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
    <link rel="stylesheet" href="style.css">
    <title>Painel Administrativo</title>
</head>
<body>
    <div class="container">
        <header>
            <p>teste</p>
        </header>
        <div class="menu-cont">
            <aside>
                <p>teste</p>
            </aside>
            <div id="content-body">
                <p>teste</p>
            </div>
        </div>
    </div>
    <p>teste</p>
    <a href="sair.php">Sair</a>
</body>
</html>