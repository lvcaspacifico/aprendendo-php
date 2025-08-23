<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, world of PHP 🐘</title>
</head>
<body>
    <h1>Funções utilitárias do PHP</h1>
    <form action="index.php" method="POST">
        <label for="x">Elemento "x":</label><br>
        <input type="text" name="x">
        <label for="y">Elemento "y":</label><br>
        <input type="text" name="y">
        <input type="submit" value="Aplicar função">
        <br>
        <br>
    </form>
</body>
</html>

<?php
    $total = null;
    $x = $_POST["x"];
    $y = $_POST["y"];
    // $total = abs($x); // negativo vira positivo bruh
    // $total = round($x); // arredonda pra cima se casas decimais >=.5
    // $total = floor($x);
    // $total = ceil($x);
    // $total = sqrt($x);
    // $total = pow($x, $y); // ex 5, 2 = 25 (5x5);
    // $total = max($x, $y);
    // $total = min($x, $y);
    // $total = pi();
    $total = rand(1,100);
    echo "X = {$total}";

?>