<?php
session_start();
if(empty($_POST['nick']) || empty($_POST['senha'])){ //checar se tem campos em branco
    $_SESSION['campos_branco'] = true;
    header('Location: index.php'); // se for para onde vai ser redirecionado
    exit();
}  

if(empty($_POST['senha']) == empty($_POST['senha2'])){ //checar se tem campos em branco
    $_SESSION['senhas'] = true;
    header('Location: index.php'); // se for para onde vai ser redirecionado
    exit();
}
$usuario = mysqli_real_escape_string($conexao, trim($_POST['nick']));  // criando variavel
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));  // criando variavel
$email =  mysqli_real_escape_string($conexao, trim($_POST['email']));  // criando variavel
$senhaMD5=MD5($senha);
$query = "INSERT into users (user, pass, email) VALUES ('$usuario', '$senhaMD5', '$email')"; //consulta com bd
$result = mysqli_query($conexao, $query); //Inserir dado de Registro
if($result == ''){
    echo "<script language='javascript' type='text/javascript'>alert('O usuario não foi cadastrado!')</script>";
}
?>