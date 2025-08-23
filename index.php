<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, world of PHP 🐘</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="user">Username:</label><br>
        <input type="text" name="user"><br><br>
        <label for="password">Password:</label><br>
        <input type="text" name="password"><br>
        <br>
        <input type="submit" value="Log in" name="login"><br><br>
    </form>
</body>
</html>

<?php
    /* 
        isset() = Retorna TRUE se var é declarada e não null
        empty() = Retorna TRUE se var não esta declarada, falsa, null ou ""
    */

    foreach($_POST as $key => $value){
        echo "Key = " . $key . " | Value = " . $value . "<br>";
    }

    if(isset($_POST["login"])){
        $user = $_POST["user"];
        $password = $_POST["password"];

        if(empty($user)){
            echo "No muhfucka user, man <br>";
        } else {
            echo "";
        }
        if(empty($password)){
            echo "No muhfucka password, man <br>";
        } else {
            echo "";
        }
    }
   
        
?>