<?php 

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'easy-boobly';


$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

// Verifica se o BD esta conectado
// if($conexao->connect_errno){
//      echo "error";
// } else {
//     echo "conexao";
// }
?>