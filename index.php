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
    <script src = "https://code.iconify.design/1/1.0.7/iconify.min.js"> </script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/index.css">
    <script src="./public/js/nav.js"></script>
    <script src="/public/js/MenuIndex.js"></script>
    <title>Pets</title>
</head>
<body>
    <header>
        <div class="pai">
            <div class="img">
                <img src="public/img/petLogo.png" alt="">
            </div>
            <div class="txt">
                <span>
                    Divista-se comprando para seu pet</br> com descontos imperdiveis!!!
                </span>
            </div>
            <div class="button">
                <?php
                    if(!isset($_SESSION['cargo'])): ?>
                <div class="pai2">
                    <div class="regiter">
                        <a href="/registro/index.php">Registro</a>
                    </div>
                    <div class="login">
                        <a href="/login/index.php">Logar</a>
                    </div>
                </div>
                <?php
                    endif;           
                ?>

                <?php
                    if(isset($_SESSION['cargo'])): ?>
                <div class="acconts">
                    <div class="iconAccont">
                        <span class="iconify" data-icon="ic:round-account-circle" data-inline="false"></span>
                    </div>
                    <div class="navAccont">
                        <nav class="pai">
                            <div class="header">
                                <span>PéPéTE</span>
                            </div>
                            <div class="sections">
                                <form action="" method="post">
                                    <div class="conta">
                                        <span class="iconify" data-icon="line-md:account" data-inline="false"></span>
                                        <span>Conta</span>
                                    </div>
                                    <div>
                                        <span class="iconify" data-icon="whh:notebook" data-inline="false"></span>
                                        <span>Histrico</span>
                                    </div>
                                    <div class="config">
                                        <span class="iconify" data-icon="carbon:settings" data-inline="false"></span>
                                        <span>Configuração</span>  
                                    </div>
                                    <div class="exit" onclick="redireExit()">
                                        <span class="iconify" data-icon="bx:bx-exit" data-inline="false"></span>
                                        <span>Sair</span>
                                    </div>   
                                </form>  
                            </div>
                        </nav>
                    </div> 
                </div>
                <?php
                    endif;           
                ?>
            </div> 
        </div>
    </header>

    <section>
        <div class="pai"> 
            <div class="nav nav1">
                <div class="pec">

                </div>
                <div class="nav2">
                    <div class="itensNav">
                        <div class="div">
                            <nav class="Gato">
                                <div>
                                    <span><span class="iconify" data-icon="fa-solid:cat" data-inline="false"></span> Gato</span>
                                </div>
                                <div>
                                    <ul class="GatoUL">
                                        <span>comida</span>
                                        <span>comida</span>
                                        <span>comida</span>
                                        <span>comida</span>
                                    </ul>
                                </div>      
                            </nav>
                            <nav class="Cao">
                                <span><span class="iconify" data-icon="fluent:animal-dog-20-filled" data-inline="false"></span> Cão</span>
                                <ul class="CaoUL">
                                    <span>comida</span>
                                    <span>comida</span>
                                    <span>comida</span>
                                    <span>comida</span>
                                    
                                </ul>
                            </nav>
                        </div>              
                    </div>
                </div>
            </div> 
            <div>
                <div class="search">
                    <div class="buscar">
                        <form action="" method="GET">
                            <div>
                                <input type="text" placeholder="Procurar">
                                <button><span class="iconify" data-icon="bx:bx-search-alt" data-inline="false"></span></button>
                            </div>
                            </form>
                    </div>
                </div>
                
                <div class="itens">
                    <div class="org">
                        <?php

                        $query = "select * from itens"; //consulta com bd
                        $result = mysqli_query($conexao, $query); // juntas os 2
                        
                        $row = mysqli_num_rows($result); // verificar se existe uma linha
                        for($i = 0; $i < $row; $i++): 
                            $dado = mysqli_fetch_array($result); // extrair dados da tabela sql
                            $nome = $dado["nome"];
                            $price = $dado["price"];
                            $caminho = $dado["caminho"];
                            $star = $dado["star"];
                        ?>
                        
                        <div class="item">
                            <form action="" method="POST">
                                <div class="form">
                                    <div class="img">
                                        <img src="<?php echo $caminho ?>" alt="">
                                    </div>
                                    <div class="inffo">
                                        <div class="spn"> 
                                            <span class="name"><?php echo $nome ?></span>
                                            <div class="star">
                                                <?php include './class/star.php' ?>
                                            </div>
                                            <span class="frt">FRETE GRÁTIS</span>
                                            <span class="price">R$ <?php echo $price ?></span>
                                        </div>
                                        <div class="btt">
                                            <button>Comprar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php
                            endfor;
                        ?>
                    </div>
                </div>
            </div>
            <div class="nav">
                <div class="pec">
                    <div class="shop">
                           
                    </div>
                </div>
                <div class="nav2">
                                     
                </div>
            </div>
        </div>
    </section>
</body>
</html>