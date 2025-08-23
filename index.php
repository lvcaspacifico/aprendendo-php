<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, world of PHP 🐘</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="radio" name="credit_card" value="vi">
        Visa<br>    
        <input type="radio" name="credit_card" value="mc">
        Mastercard<br>    
        <input type="radio" name="credit_card" value="ae">
        American Express<br><br><br>    
        <input type="submit" name="confirm" value="Confirm">
    </form>
</body>
</html>

<?php
    /* 
        Radio 
    */

    if(isset($_POST["confirm"])){
       
        if(isset($_POST["credit_card"])){ 
            $credit_card = $_POST["credit_card"]; 

            switch($credit_card){
                case "vi":
                    echo "VISA a VIS";
                    break;
                case "mc":
                    echo "Master, master!";
                    break;
                case "ae":
                    echo "Zuuuuum! It's express.";
                    break;
                default:
                    echo "WTF";
            }

        } else {
            echo "Please select a card";
        }
    }  
?>