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
                        <input id="nick" name="nick" type="text" placeholder="Usuário">
                        <input id="email" name="email" type="email" placeholder="E-mail">
                        <input id="password" name="senha" type="password" placeholder="Senha">
                        <input id="password2" name="senha2" type="password" placeholder="Repetir Senha">
                    </div>
                    <div class="button">
                        <a href="/login/index.php">Logar</a>
                        <button id="button">Registrar</button>
                    </div> 
                    <div class="msg">
                        <?php
                        if(isset($_SESSION['campos_branco'])): ?>
                            <span>Verifique os campos!</span>
                            <script src="verification.js"></script>
                            <?php
                                endif;
                                unset($_SESSION['campos_branco']);
                        ?>

                        <?php
                            if(isset($_SESSION['senhas'])): ?>
                            <span>Verifique as senhas!</span>
                            <script src="verificationpass.js"></script>
                            <?php
                                endif;
                                unset($_SESSION['senhas']);
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