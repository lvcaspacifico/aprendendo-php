<?php
    // This is a comment!
    /* 
        Data Types on PHP | variables string, int, float, bool, null
    */

    $name = "Lucas Pacífco";
    $food = "pizza";
    $age = 21;
    $xp = 1.5;
    $salary = 3.642;
    $available = true; // aparece como 1 no echo, 0 não aparece atall

    echo "Olá, me chamo {$name}!👋🏻<br>
        Tenho: <br>
        {$age} anos de idade<br>
        {$xp} anos de experiência<br>
        R\$ {$salary} foi meu maior salário TD<br>
        Disponível para freelas: {$available}<br>";

    $total = null;
    $qtd = 3;
    $price = 5.99;
    echo "Você pediu {$qtd}x do item de R\${$price}";
    $total = $qtd * $price;
    echo "<br>Total: R\${$total}";

    /* 
        Operators
    */

    $isEven = 2 % 2;
    echo "<br>Is even = {$isEven}";
    /*
        Increment
    */
    $isEven+=2;
    echo "<br>Is even = {$isEven}";
?>