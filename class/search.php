<?php
    if(!isset($_POST["search"])){
        $_POST["search"] = "";
    }
    $pesquisar = mysqli_real_escape_string($conexao, trim($_POST["search"]));
    if($pesquisar == ""):
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
    endif;
?>

<?php   
    if(isset($pesquisar) && !$pesquisar == ""):
        $query = "SELECT * FROM itens WHERE nome LIKE '%$pesquisar%'";
        $result = mysqli_query($conexao, $query);
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
    endif;
?>