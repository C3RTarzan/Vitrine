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
                        <div class="item">
                            <form action="" method="POST">
                                <div class="form">
                                    <div class="img">
                                        <img src="./public/img/bc3.jpg" alt="">
                                    </div>
                                    <div class="inffo">
                                        <div class="spn"> 
                                            <span class="name">Slip On Santa Lolla Logo Feminino</span>
                                            <div class="star">
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-half" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star" data-inline="false"></span>
                                            </div>
                                            <span class="frt">FRETE GRÁTIS</span>
                                            <span class="price">R$ 89,99</span>
                                        </div>
                                        <div class="btt">
                                            <button>Comprar</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>

                        <div class="item">
                            <form action="" method="POST">
                                <div class="form">
                                    <div class="img">
                                        <img src="./public/img/bc3.jpg" alt="">
                                    </div>
                                    <div class="inffo">
                                        <div class="spn"> 
                                            <span class="name">Slip On Santa Lolla Logo Feminino</span>
                                            <div class="star">
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-half" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star" data-inline="false"></span>
                                            </div>
                                            <span class="frt">FRETE GRÁTIS</span>
                                            <span class="price">R$ 89,99</span>
                                        </div>
                                        <div class="btt">
                                            <button>Comprar</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>

                        <div class="item">
                            <form action="" method="POST">
                                <div class="form">
                                    <div class="img">
                                        <img src="./public/img/bc3.jpg" alt="">
                                    </div>
                                    <div class="inffo">
                                        <div class="spn"> 
                                            <span class="name">Slip On Santa Lolla Logo Feminino</span>
                                            <div class="star">
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-half" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star" data-inline="false"></span>
                                            </div>
                                            <span class="frt">FRETE GRÁTIS</span>
                                            <span class="price">R$ 89,99</span>
                                        </div>
                                        <div class="btt">
                                            <button>Comprar</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>

                        <div class="item">
                            <form action="" method="POST">
                                <div class="form">
                                    <div class="img">
                                        <img src="./public/img/bc3.jpg" alt="">
                                    </div>
                                    <div class="inffo">
                                        <div class="spn"> 
                                            <span class="name">Slip On Santa Lolla Logo Feminino</span>
                                            <div class="star">
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-half" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star" data-inline="false"></span>
                                            </div>
                                            <span class="frt">FRETE GRÁTIS</span>
                                            <span class="price">R$ 89,99</span>
                                        </div>
                                        <div class="btt">
                                            <button>Comprar</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>

                        <div class="item">
                            <form action="" method="POST">
                                <div class="form">
                                    <div class="img">
                                        <img src="./public/img/bc3.jpg" alt="">
                                    </div>
                                    <div class="inffo">
                                        <div class="spn"> 
                                            <span class="name">Slip On Santa Lolla Logo Feminino</span>
                                            <div class="star">
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-half" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star" data-inline="false"></span>
                                            </div>
                                            <span class="frt">FRETE GRÁTIS</span>
                                            <span class="price">R$ 89,99</span>
                                        </div>
                                        <div class="btt">
                                            <button>Comprar</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>

                        <div class="item">
                            <form action="" method="POST">
                                <div class="form">
                                    <div class="img">
                                        <img src="./public/img/bc3.jpg" alt="">
                                    </div>
                                    <div class="inffo">
                                        <div class="spn"> 
                                            <span class="name">Slip On Santa Lolla Logo Feminino</span>
                                            <div class="star">
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-fill" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star-half" data-inline="false"></span>
                                                <span class="iconify" data-icon="bi:star" data-inline="false"></span>
                                            </div>
                                            <span class="frt">FRETE GRÁTIS</span>
                                            <span class="price">R$ 89,99</span>
                                        </div>
                                        <div class="btt">
                                            <button>Comprar</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav">
                <div class="pec">

                </div>
                <div class="nav">
                    
                </div>
            </div>
        </div>
    </section>
</body>
</html>