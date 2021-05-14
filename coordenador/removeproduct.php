<?php
session_start();
include '../class/conexao.php';
include '../class/adminverify.php';

$id = $_POST['itens'];
$query = "DELETE FROM itens WHERE id = '$id'";
$result = mysqli_query($conexao, $query);

$_SESSION['apagado'] = true;
header('Location: index.php');
?>