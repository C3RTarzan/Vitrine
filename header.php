    <link rel="stylesheet" href="/public/css/header.css">
    <header>
        <div class="pai">
            <div class="img">
                <img src="/public/img/petLogo.png" alt="">
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
                                    <div class="conta" onclick="redireAccont()">
                                        <span class="iconify" data-icon="line-md:account" data-inline="false"></span>
                                        <span>Conta</span>
                                    </div>
                                    <?php
                                        if($_SESSION['cargo'] == "admin"):
                                    ?>
                                        <div onclick="redireCoordenador()">
                                            <span class="iconify" data-icon="clarity:administrator-line" data-inline="false"></span>
                                            <span>Coordenador</span>
                                        </div>
                                    <?php
                                        endif;
                                    ?>
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