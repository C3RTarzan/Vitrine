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
$senhamd5 = MD5($senha);
$email =   mysqli_real_escape_string($conexao, trim($_POST['email']));  // criando variavel
$cargo = "user";
$query = "INSERT into user (nick, pass, email, cargo) VALUES ('$usuario', '$senhamd5', '$email', '$cargo')"; //consulta com bd

$queryuser = "SELECT * FROM user where nick = '$usuario'";
$resultuser = mysqli_query($conexao, $queryuser);
$rowuser = mysqli_num_rows($resultuser);

$queryemail = "SELECT * FROM user where nick = '$usuario'";
$resultemail = mysqli_query($conexao, $queryemail);
$rowemail = mysqli_num_rows($resultemail);

if(!$rowuser > 0){
    if(!$rowemail > 0){
        $result = mysqli_query($conexao, $query); //Inserir dado de Registro
        $_SESSION['registered'] = true;
        header('Location: /login/index.php');
        exit();
    }
    $_SESSION['registered_email'] = true;
    header('Location: ./index.php');
    exit();
}else{
    $_SESSION['registered_user'] = true;
    header('Location: ./index.php');
    exit();
}

 
?>