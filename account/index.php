<?php
session_start();
include("../class/conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = "https://code.iconify.design/1/1.0.7/iconify.min.js"> </script>
    <script src="/public/js/nav.js"></script>
    <script src="/public/js/MenuIndex.js"></script>
    <link rel="stylesheet" href="../public/css/account.css">
    <link rel="stylesheet" href="/">
    <title>Document</title>
</head>
<body>
<?php
    include "../header.php"
    ?>
    <section>
        <div class="alfa">
            <div class="pai">
                <div class="paimg">
                    <div class="img">
                        <img src="https://carros.automobile.ao/uploads/avatars/blank.png" alt="">
                    </div>
                </div>
                <div class="name">
                    <span>Felipe Araújo</span>
                </div>
            </div>  
            <div class="pai2">
                <div class="email">
                    <span>E-mail</span>
                </div>
                <div class="senha">
                    <span>Senha</span>
                </div>
                <div class="endereco">
                    <span>Endereço</span>
                </div>
                <div class="cartao">
                    <span>Cartão</span>
                </div>
            </div>      
        </div>
    </section>
    <div class="bc">
        <div class="emailcontainer">
            <div class="icon">
                
            </div>
            <div class="imgpai">
                <div class="img">
                    <img src="https://carros.automobile.ao/uploads/avatars/blank.png" alt="">
                </div>            
            </div>
            <div class="paiemail">
                <div class="email">
                    <span>Email@blabla.com</span>
                </div>
                <div class="salvar">
                    <form action="" method="post">
                        <div>
                            <input type="text" placeholder="Novo E-mail"> 
                        </div>
                        <div>
                            <button>Salvar</button>
                        </div>
                    </form>                
                </div>
            </div>
        </div>
    </div>
</body>
</html>