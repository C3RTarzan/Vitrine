<?php
session_start();
include("../class/conexao.php");

if(empty($_POST['nick']) || empty($_POST['senha'])){ //checar se tem campos em branco
    $_SESSION['campos_branco'] = true;
    header('Location: index.php'); // se for para onde vai ser redirecionado
    exit();
}

$usuario =  mysqli_real_escape_string($conexao, trim($_POST['nick']));  // criando variavel
$senha =  mysqli_real_escape_string($conexao, trim($_POST['senha']));  // criando variavel
$senhaMD5=MD5($senha);
$query = "select * from user where nick = '$usuario' and pass = '$senha'"; //consulta com bd

$result = mysqli_query($conexao, $query); // juntas os 2
$dado = mysqli_fetch_array($result); // extrair dados da tabela sql

$row = mysqli_num_rows($result); // verificar se existe uma linha
if($row > 0){
    include '../class/sessions.php';
    header('Location: /index.php');
    
}else{
    $_SESSION['erro_logar'] = true;
    header('Location: index.php'); // se for para onde vai ser redirecionado
    exit();
}
?>