<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/public/css/registro.css">
    <title>Document</title>
</head> 
<body>
    <section>
    <div class="pai">
        <div class="form">
            <div class="bv">
                <h1>Seja bem-vindo</h1>
                <h2>Registro:</h2>
            </div>
                
            <div class="formulario">
                <form action="registro.php" method="post">
                    <div class="itens">
                        <input id="nick" name="nick" type="text" placeholder="Usuário" autocomplete="nickname">
                        <input id="email" name="email" type="email" placeholder="E-mail" autocomplete="email">
                        <input id="password" name="senha" type="password" placeholder="Senha" autocomplete="new-password">
                        <input id="password2" name="senha2" type="password" placeholder="Repetir Senha" autocomplete="password_verify">
                    </div>
                    <div class="button">
                        <a href="/login/index.php">Logar</a>
                        <button id="button">Registrar</button>
                    </div> 
                    <div class="msg">
                        <?php
                            include("erros.php")
                        ?>
                        
                    </div>
                </form>
            </div>
            
        </div>
        <div class="logo">
            <img src="" alt="">
        </div>
        
    </div>
       
    </section>
</body>
</html>