<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, world of PHP 🐘</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="foods[]" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="foods[]" value="Tacco">
        Tacco<br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
    /* 
        Checkbox 
    */
    if(isset($_POST["submit"])){
        
        $foods = $_POST["foods"];
        foreach($foods as $f){
            echo "Food = {$f}<br>";
        }
    }
?>