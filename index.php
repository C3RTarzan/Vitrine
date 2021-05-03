<?php
session_start();
include("class/conexao.php");
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/index.css">
    <title>Pets</title>
</head>
<body>
    <header>
        <div class="pai">
            <div class="img">
                <img src="public/img/gato.png" alt="">
            </div>
            <div class="txt">
                <span>
                    Divista-se comprando seu pet</br> com descontos imperdiveis
                </span>
            </div>
            <div class="button">
                <div class="pai">
                    <div class="regiter">
                        <a href="/registro/index.php">Registro</a>
                    </div>
                    <div class="login">
                        <a href="../logar/logar.php">Logar</a>
                    </div>
                </div>
            </div> 
        </div>
    </header>

    <section>
        <div class="pai">  
            <div>
                <div class="search">

                </div>
                
                <div class="itens">

                </div>
            </div>
            <div class="nav">

            </div>
        </div>
    </section>
</body>
</html>