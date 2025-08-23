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
        Switch
    */
    // 💩 version:
    $statusCode = 301;

    if($statusCode == 200){
        echo "Vixi";
    } elseif($statusCode == 200){
        echo "Vixi";
    } elseif($statusCode == 201){
        echo "Vixi1";
    } elseif($statusCode == 202){
        echo "Vixi2";
    } elseif($statusCode == 200){
        echo "Vixi";
    }
        // ...

    // 🪙 version

    switch($statusCode){
        case 300:
            echo "Deu boa";
            break;
        case 301:
            echo "Deu boa1";
            break;
        case 302:
            echo "Deu boa2";
            break;
        case 303:
            echo "Deu boa";
            break;
        case 300:
            echo "Deu boa";
            break;
        default:
            echo "Defaultou";
            break;
    }
?>