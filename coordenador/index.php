<?php
session_start();
include '../class/conexao.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="addproduct.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Nome">
        <input type="text" name="price" placeholder="Preço">
        <input type="text" name="star" placeholder="Estrelas">
        <input type="file" name="img">
        <button>Enviar</button>
    </form>
</body> 
</html>