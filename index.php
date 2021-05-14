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
    <script src="/public/js/nav.js"></script> 
    <script src="/public/js/MenuIndex.js"></script>
    
    <title>Pets</title>
</head>
<body>
    <?php
    include "header.php"
    ?>

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
                                    <?php
                                        $query = "select * from nav"; //consulta com bd
                                        $result = mysqli_query($conexao, $query); // juntas os 2
                                        $row = mysqli_num_rows($result); // verificar se existe uma linha
                                        for($i = 0; $i < $row; $i++): 
                                            $dado = mysqli_fetch_array($result); // extrair dados da tabela sql
                                            $nome = $dado["nome"];
                                    ?>
                                    <span><?php echo $nome ?></span>
                                    <?php
                                        endfor;
                                    ?>
                                    </ul>
                                </div>      
                            </nav>
                            <nav class="Cao">
                                <span><span class="iconify" data-icon="fluent:animal-dog-20-filled" data-inline="false"></span> Cão</span>
                                <ul class="CaoUL">
                                    <?php
                                        $query = "select * from nav"; //consulta com bd
                                        $result = mysqli_query($conexao, $query); // juntas os 2
                                        $row = mysqli_num_rows($result); // verificar se existe uma linha
                                        for($i = 0; $i < $row; $i++): 
                                            $dado = mysqli_fetch_array($result); // extrair dados da tabela sql
                                            $nome = $dado["nome"];
                                    ?>
                                    <span><?php echo $nome ?></span>
                                    <?php
                                        endfor;
                                    ?>
                                </ul>
                            </nav>
                        </div>              
                    </div>
                </div>
            </div> 
            <div>
                <div class="search">
                    <div class="buscar">
                        <form action="" method="POST">
                            <div>
                                <input type="text" name="search" placeholder="Procurar">
                                <button><span class="iconify" data-icon="bx:bx-search-alt" data-inline="false"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="itens">
                    <div class="org">
                        
                        <?php include "./class/search.php" ?>
                        
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
<script src="/public/js/navL.js"></script>
</html>