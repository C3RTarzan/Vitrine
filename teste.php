<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    session_start();
?>
<form action="" method="post">
    <input type="text" name="escolha" placeholder="Quantia">
    <button>Quantia</button><br><br>
</form>
<form action="" method="post">
    <input type="text" name="buscar" placeholder="Buscar">
    <button>Buscar</button><br><br>
</form>
<?php
    if(!isset($_SESSION['quantia'])){
        $_SESSION['quantia'] = 3;
    }
    if(!isset($_POST["escolha"])){
        $_POST["escolha"] = $_SESSION['quantia'];
    }
    if(isset($_POST["escolha"])){
        if($_POST["escolha"] == ''){
            $_POST["escolha"] = 3;
        }
        $_SESSION['quantia'] = $_POST["escolha"];
    }
    if(!isset($_POST["buscar"])){
        $_POST["buscar"] = '';
    }
    $q = $_SESSION['quantia'];
    if($_POST["buscar"] == ''){
        echo "Números validos: <br>";
        for($i = 1; $i <= $q; $i++){
            echo "- " . $i . "<br>";
        }
    }
    for($i = 1; $i <= $q; $i++){
        if($_POST["buscar"] == $i){
            echo "Número <span style='color: red;'>" . $i . "</span> Encontrado" . "<br>";
        }
    }
    if($_POST["buscar"] > $_SESSION['quantia'] || $_POST["buscar"] == "0"){
        echo "Erro, Numero " . $_POST["buscar"] . " é invalido!<br>";
    }
    
    
?>
</body>
</html>
