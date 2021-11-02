<?php
session_start();
ob_start();
include_once 'conexao.php';
  // Está dizendo que o usuário ou a senha estão inválidos no banco de dados, mas não consegui descobrir qual o erro. Obs: Fiz um banco diferente do da aula só para ter usuário e senha.
//if((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))){
   // $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário realizar o login para acessar a página!</p>";
    //header("Location: index.php");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-ico">
    <link rel="stylesheet" href="style.css"/>
    <title>Dashboard</title>
</head>

<body>
    <div>
        <h1>Bem vindo!</h1>            
    
    <aside> <a href="sair.php">Sair</a> </aside>
    </div>
    <div class="div1">
        <h3>Adicionar produto</h3>
        <form action="" method="POST">
            <label for="">Nome produto</label>
                <input placeholder="Nome" type="text">
                <br>   
            <label for="">Marca do produto</label>  
                <input placeholder="Marca" type="text">
                <br>     
            <label for="">Preço do produto</label>    
                <input placeholder="Preço" type="number" step="0.01" name="preco" min="0.01">
                <br>   
            <label for="">Produtos em estoque</label>        
                <input placeholder="Quantidade em estoque"  type="text">
                <br>
                <input type="submit" name=" Adicionar ">

            
    
        </form>
    </div>

    <div class="div2">
        <form action="" method="POST">
            <label for="">Alterar o nome do produto</label>
                <input placeholder="Nome" type="text">
                <br>   

        </form>

    </div>

</body>

</html>