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
        Arrays e Associative Arrays
    */
    $foods = array("apple", "banana", "coconut");
    
    //array_pop($foods);
    //array_shift($foods);
    //array_push($foods, "strawberry");
    // $reversed_foods = array_reverse($foods);

    // foreach($reversed_foods as $food){
    //     echo "* " . $food . "<br>";
    // }

    // echo count($foods);
    // foreach($foods as $food){
    //     echo "* " . $food . "<br>";
    // }

    $capitals = array("USA" => "Washington D.C.", 
                    "JAPAN" => "Kyoto",
                    "SOUTH KOREA" => "Seoul");
    //echo $capitals["USA"];

    $capitals["USA"] = "New Vegas";
    $capitals["RUSSIA"] = "Moscow";

    // array_* remove os pares
    // array_flip muda a chave pelo valor
    
    $keys = array_keys($capitals);

    foreach($capitals as $key => $value){
        echo"Key = {$key} | Value = {$value}<br>";
    }

    foreach($keys as $k){
        echo "Key = \"" . $k . "\"<br>";
    }

?>