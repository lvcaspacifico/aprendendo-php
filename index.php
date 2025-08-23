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
        Conditions if elseif else
    */
    // $age = 17;
    // if($age >= 18){
    //     echo "Allowed: you may enter the site!";
    // } 
    // elseif($age == 17){
    //     echo "One more year to go: you must be 18 or more to enter the site";
    // }
    // else {
    //     echo "Not allowed: you must be 18 or more to enter the site";
    // }
    /*
        Logical operators
    */
    $bill = 21.99;
    if($bill > 21.98 && $bill != 0){
        echo "Must pay this shit, sire";
    };
    $mustPay = false;
    if(!$mustPay){
        echo "Must pay this shit, sire";
    };
    if(!$mustPay || $bill > 50){
        echo "Pay aswell";
    };

?>