<?php
session_start();
include '../class/conexao.php';
include '../class/adminverify.php';

function random($size = 8){
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuwxyz0123456789";
    $randomString = '';
    for($i = 0; $i < $size; $i = $i+1){
       $randomString .= $chars[mt_rand(0,60)];
    }
    return $randomString;
}
$while = true;
while($while){
    $caminho = random();
    $ext = strtolower(substr($arquivo = $_FILES['img']['name'],-4));
    $sub = substr($caminho, -12, 8);
    $dir = '/public/products/';
    $verify = $dir.$caminho.$ext;
    $query = "select * from itens where caminho = '$verify'";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result); 
    if($row == 0){
        break;
    }
}


$name = mysqli_real_escape_string($conexao, trim($_POST['name']));  // criando variavel
$price = mysqli_real_escape_string($conexao, trim($_POST['price']));  // criando variavel
$star =  mysqli_real_escape_string($conexao, trim($_POST['star']));  // criando variavel
$tag =  mysqli_real_escape_string($conexao, trim($_POST['tag']));  // criando variavel



$ext = strtolower(substr($arquivo = $_FILES['img']['name'],-4));
$new_name = $caminho . $ext; //Definindo um novo nome para o arquivo
$dir = '../public/products/'; //Diretório para uploads 
move_uploaded_file($_FILES["img"]['tmp_name'], $dir.$new_name);
$cm = $dir.$new_name;


$query = "INSERT into itens (nome, price, caminho, star, tag) VALUES ('$name', '$price', '$verify', '$star', '$tag')";
$result = mysqli_query($conexao, $query);
$_SESSION['registrado'] = true;
header('Location: index.php');
?>