<?php
session_start();
include("../class/conexao.php");
include("../class/userverefy.php");
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
    include "../header.php";
    ?>
    <?php
        if(isset($_SESSION['id'])):
            $id = $_SESSION['id'];
            $query = "SELECT * FROM user where id = '$id'";
            $result = mysqli_query($conexao, $query);
            $dado = mysqli_fetch_array($result);
            $img = $dado["img"];
            $nick = $dado["nick"];
            $email = $dado["email"]
            // $_SESSION['id'] = $dado["id"];
            // $_SESSION['nick'] = $dado["nick"];
            // $_SESSION['email'] = $dado["email"];
            // $_SESSION['cargo'] = $dado["cargo"];
            // $_SESSION['img'] = $dado["img"];
    ?>
    <section>
        <div class="alfa">
            <div class="pai">
                <div class="paimg">
                    <div class="img">
                        <img src="/public/account/<?php echo $img; ?>" alt="">
                        <div class="editar">
                            <span>EDITAR</span>
                        </div>   
                    </div>
                </div>
                <div class="name">
                    <span><?php echo $nick;?></span>
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
                    <span>Informações</span>
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
                    <img src="/public/account/<?php echo $img; ?>" alt="">
                </div>            
            </div>
            <div class="paiemail">
                <div class="email">
                    <span ><?php echo $email; ?></span>
                </div>
                <div class="salvar">
                    <form action="./email.php" method="post">
                        <div>
                            <input name="newemail" type="email" placeholder="Novo E-mail"> 
                        </div>
                        <div>
                            <button>Salvar</button>
                        </div>
                        <div class="error">
                            <?php
                            if(isset($_SESSION['erroemail'])): ?>
                                <span>Esse E-Mail já esta em uso.</span>
                                <?php
                                    endif;
                                    unset($_SESSION['erroemail']);
                            ?>
                            <?php
                            if(isset($_SESSION['erroemailvazio'])): ?>
                                <span>Verifique o E-Mail digitado.</span>
                                <?php
                                    endif;
                                    unset($_SESSION['erroemailvazio']);
                            ?>
                            <?php
                            if(isset($_SESSION['salveemail'])): ?>
                                <span>Novo E-Mail salvo.</span>
                                <?php
                                    endif;
                                    unset($_SESSION['salveemail']);
                            ?>                     
                        </div>
                    </form>                
                </div>
            </div>
        </div>
    </div>
    <?php
        endif;
    ?>
</body>
    <script src="./click.js"></script>
    <?php
        if(isset($_SESSION['bc'])): ?>
            <script src="./bc.js"></script>
            <?php
                endif;
                unset($_SESSION['bc']);
        ?>
</html>