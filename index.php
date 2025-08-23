<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, world of PHP 🐘</title>
    <form action="index.php" method="POST">
        <input type="submit" value="stop" name="stop">
    </form>
</head>
<body>
</body>
</html>

<?php
    /* 
        For Loops
    */

    // for($i = 0; $i < 5; $i++){
    //     echo "Teste<br>";
    // }
    // echo "<br>";

    // /* 
    //     While Loops
    // */
    //     $counter = 0;
    //     while($counter < 10){
    //         $counter++;
    //         echo "{$counter}<br>";
    //     }
    $i = null;
    while($i  < 10){
        if($_POST["stop"]){
            echo "Parando de printar";
            break;
        }
        $i++;
        echo "{$i}";
    }
    
?>