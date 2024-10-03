<?php
session_start();
// print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['user-login']) && !empty($_POST['password-login'])){

    //deixa o user acessar o sistema

    include_once("valid-login.php");
    $user = $_POST['user-login'];
    $senha = $_POST['password-login'];

    // print_r('Email: ' . $user);
    // print_r('<br>');
    // print_r('Senha: ' . $senha);
    // print_r('<br>');

    $sql = "SELECT * FROM usuarios WHERE username_cadastro = '$user' and senha_cadastro = '$senha'";

    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) < 1 ){
        unset($_SESSION['user']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } else{
        $_SESSION['user'] = $user;
        $_SESSION['senha'] = $senha;
        header('Location: system.php');
    }

} else {

    // não acessa e volta para a "HOME"
}

?>