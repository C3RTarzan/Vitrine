<?php
session_start();
include '../class/conexao.php';
include '../class/adminverify.php';

$id = $_POST['itens'];
$query = "DELETE FROM nav WHERE id = '$id'";
$result = mysqli_query($conexao, $query);

$_SESSION['apagadotag'] = true;
header('Location: index.php');
?>