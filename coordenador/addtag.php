<?php
session_start();
include '../class/conexao.php';
include '../class/adminverify.php';

$tag =  mysqli_real_escape_string($conexao, trim($_POST['tag']));
$nome =  mysqli_real_escape_string($conexao, trim($_POST['nome']));

$query = "INSERT into nav (nome, tag) VALUES ('$nome', '$tag')";
$result = mysqli_query($conexao, $query);
$_SESSION['registradotag'] = true;
header('Location: index.php');

?>