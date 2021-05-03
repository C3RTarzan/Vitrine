<?php
session_start();
include("../class/conexao.php");

if(empty($_POST['nick']) || empty($_POST['senha']) || empty($_POST['email'])){ //checar se tem campos em branco
    $_SESSION['campos_branco'] = true;
    header('Location: index.php'); // se for para onde vai ser redirecionado
    exit();
}

if($_POST['senha'] !== $_POST['senha2']){
    $_SESSION['senhas'] = true;
    header('Location: index.php'); /// senhas são iguais
    exit();
}

$usuario =  mysqli_real_escape_string($conexao, trim($_POST['nick']));  // criando variavel
$senha =  mysqli_real_escape_string($conexao, trim($_POST['senha']));  // criando variavel
$email =   mysqli_real_escape_string($conexao, trim($_POST['email']));  // criando variavel
$query = "INSERT into user (nick, pass, email) VALUES ('$usuario', '$senha', '$email')"; //consulta com bd
$result = mysqli_query($conexao, $query); //Inserir dado de Registro
if($result == ''){
    echo "<script language='javascript' type='text/javascript'>alert('O usuario não foi cadastrado!')</script>";
} 
?>