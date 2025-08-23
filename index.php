<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, world of PHP 🐘</title>
</head>
<body>
    <h1>Pedido de Pizza</h1>
    <form action="index.php" method="POST">
        <label for="qtd">
            Quantidade:
        </label><br>
        <input type="number" step="1" name="qtd">
        <br>
        <label for="item">
            Item:
        </label><br>
        <input type="text" name="item">
        <br>
        <input type="submit" value="Pedir">
    </form>    
</body>
</html>

<?php
    /*
        $_GET = Data append na URL
            não seguro
            limite de char
            GET request pode ser cacheada
            Melhor para uma página de pesquisa

        $_POST = Data no body do HTTP
            Mais seguro
            sem limite de dados
            não dá pra favoritar
            requests não são cacheadas
            Melhor para credenciais
    */

    $qtd = $_POST["qtd"];
    $item = $_POST["item"];
    $preco = 20.99;
    $total = $preco * $qtd;
    echo "Você pediu {$qtd}x item {$item}";
    echo "<br>Total: R\${$total}";
?>