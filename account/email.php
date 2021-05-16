<?php
session_start();
include("../class/conexao.php");
include("../class/userverefy.php");


if(isset($_POST["newemail"])){
    $newemail = mysqli_real_escape_string($conexao, trim($_POST["newemail"]));
    $query = "select * from user where email = '$newemail'";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);
    if($newemail == null){
        $_SESSION['erroemailvazio'] = true;
        $_SESSION['bc'] = true;
        header('Location: index.php'); 
        exit(); 
    }
    if($row != 0){
        $_SESSION['erroemail'] = true;
        $_SESSION['bc'] = true;
        header('Location: index.php'); 
        exit(); 
    }

    $id = $_SESSION['id'];
    $queryemail = "UPDATE user SET email = '$newemail' WHERE id = '$id'";
    $resultemail = mysqli_query($conexao, $queryemail);
    $_SESSION['email'] = $newemail;
    $_SESSION['salveemail'] = true;
    $_SESSION['bc'] = true;
    header('Location: index.php'); 
    exit();
}


?>