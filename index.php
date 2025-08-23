<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, world of PHP 🐘</title>
</head>
<body> 
</body>
</html>

<?php
    /* 
        Functions + string functions
    */ 
    function happy_birthday(string $name, string $friendsName){
        $name = strtolower($name);
        $name = trim($name);
        $subs = substr($name, 0, 5);
        $len = strlen($name);
        $splitPos = strpos($name, " ");
        $firstName = ucfirst(substr($name, 0, $splitPos));
        $lastName = ucfirst(substr($name, ($splitPos + 1), $len));
        $name = str_replace(" ", "", $name);
        // explode() pra splitar e devolver array
        // implode() pra juntar um array e devolver string
        echo "Happy birthday, <strong>@{$name}</strong>!🥳<br>";
        echo "Username len = {$len} | Substr = {$subs}<br>";
        echo "Nome = {$firstName} | Sobrenome = {$lastName}<br>";
    
        $friendsNameParts = explode(" ", strtolower(trim($friendsName)));
        $friendsFirstName = ucfirst($friendsNameParts[0]);
        $friendsUsername = "@" . strtolower(implode($friendsNameParts));
        $friendsLastName = ucfirst($friendsNameParts[1]);
         echo "Bbem-vindo, amigo, <strong>{$friendsUsername}</strong>!👋🏻<br>";
        echo "Nome = {$friendsFirstName} | Sobrenome = {$friendsLastName}<br>";
    
    } 

    happy_birthday("    LVCAS PACIFICO", "    JOHN COCK");
?>