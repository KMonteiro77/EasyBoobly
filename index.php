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
    <title>Home - EasyBoobly</title>
</head>
<body>
    <h1>HOME EM CONTRUÇÃO!</h1>
    <a href="config-bd/sair.php">Sair</a>
</body>
</html>