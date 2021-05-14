<?php
session_start();
include '../class/conexao.php';
include '../class/adminverify.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="addproduct.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Nome">
        <input type="text" name="tag" placeholder="TAG">
        <input type="text" name="price" placeholder="Preço">
        <input type="text" name="star" placeholder="Estrelas">
        <input type="file" name="img">
        <button>Enviar</button>
    </form>
    <?php
        if(isset($_SESSION['registrado'])): ?>
        <span>Enviado com Sucesso</span>
    <?php
        endif;
        unset($_SESSION['registrado']);
    ?>
    <br>
    <form action="removeproduct.php" method="post">
        <select name="itens">
            <?php
            $query = "select * from itens"; //consulta com bd
            $result = mysqli_query($conexao, $query); // juntas os 2         
            $row = mysqli_num_rows($result); // verificar se existe uma linha
            for($i = 0; $i < $row; $i++): 
                $dado = mysqli_fetch_array($result); // extrair dados da tabela sql
                $nome = $dado["nome"];
                $id = $dado["id"];
                ?>
                    <option value="<?php echo $id ?>"><?php echo $nome?></option>
                <?php
                    endfor;
            ?>
        </select>
        <button>Deletar</button>
    </form>
    <?php
        if(isset($_SESSION['apagado'])): ?>
        <span>Apagado com Sucesso</span>
    <?php
        endif;
        unset($_SESSION['apagado']);
    ?>
    <br>
    <form action="addtag.php" method="post">
        <input type="nome" name="nome" placeholder="Nome">
        <input type="text" name="tag" placeholder="TAG">
        <button>Enviar</button>
    </form>
    <?php
        if(isset($_SESSION['registradotag'])): ?>
        <span>Enviado com Sucesso</span>
    <?php
        endif;
        unset($_SESSION['registradotag']);
    ?>
    <br>
    <form action="removetag.php" method="post">
        <select name="itens">
            <?php
            $query = "select * from nav"; //consulta com bd
            $result = mysqli_query($conexao, $query); // juntas os 2         
            $row = mysqli_num_rows($result); // verificar se existe uma linha
            for($i = 0; $i < $row; $i++): 
                $dado = mysqli_fetch_array($result); // extrair dados da tabela sql
                $nome = $dado["nome"];
                $id = $dado["id"];
                ?>
                    <option value="<?php echo $id ?>"><?php echo $nome?></option>
                <?php
                    endfor;
            ?>
        </select>
        <button>Deletar</button>
    </form>
    <?php
        if(isset($_SESSION['apagadotag'])): ?>
        <span>Apagado com Sucesso</span>
    <?php
        endif;
        unset($_SESSION['apagadotag']);
    ?>
    <br>
    <a href="/index.php">Voltar</a>
</body> 
</html>