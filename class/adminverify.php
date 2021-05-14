<?php
if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != "admin"){
    header('Location: ../index.php');
    exit();
}
?>