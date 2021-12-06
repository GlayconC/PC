<?php
session_start();
include_once './conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Upload de imagem </title>
    </head>
    <body>
        <h1>Cadastrar Imagem</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="proc_cad_img.php" enctype="multipart/form-data">
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="Digitar o nome"><br><br>
            
            <label>Imagem</label>
            <input type="file" name="imagem"><br><br>
            
            <input name="SendCadImg" type="submit" value="Cadastrar">
        </form>
    </body>
</html>
<?php  
        $img = 'SELECT imagem FROM imagens';
        $img_resultado = $conn ->prepare($img);
        $img_resultado -> execute();

        while($row_img = $img_resultado->fetch(PDO::FETCH_ASSOC)){
        echo '<img src="./imagens/0/'.$row_img['imagem'].'">'."<br>";
    } ?>


