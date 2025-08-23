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
        <label for="radius">Radius:</label><br>
        <input type="text" name="radius">
        <input type="submit" value="Obter circunferência">
        <br>
        <br>
    </form>
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $circunf = null;
    $circunf = 2 * pi() * $radius;
    $circunf = round($circunf, 5);

    $area = pi() * pow($radius, 2);
    $area = round($area, 5);

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 5);
    echo "<br> Circunferência = {$circunf} cm";
    echo "<br> Área = {$area}cm^2";
    echo "<br> Volume = {$volume}cm";
?>