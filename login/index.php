<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/login.css">
    <title>Document</title>
</head> 
<body>
    <section>
    <div class="pai">
        <div class="form">
            <div class="bv">
                <h1>Seja bem-vindo</h1>
                <h2>Login:</h2>
            </div>
                
            <div class="formulario">
                <form action="registro.php" method="post">
                    <div class="itens">
                        <input name="nick" type="text" placeholder="Usuário">
                        <input name="senha" type="password" placeholder="Senha">
                    </div>
                    <div class="button">
                        <a href="/registro/index.php">Registrar</a>
                        <button>Logar</button>
                    </div> 
                    <div class="recu">
                        <a href="">Esqueceu a senha? <span>clique aki</span>.</a>
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