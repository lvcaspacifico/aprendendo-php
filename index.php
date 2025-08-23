<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, world of PHP 🐘</title>
</head>
<body> 
    <form action="index.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username">
        <label for="age">Age:</label>
        <input type="text" name="age">
        <label for="email">Email:</label>
        <input type="text" name="email">
        <br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    /* 
        Sanitizar / Validar forms input
    */ 
     if(isset($_POST["submit"])){
        $username = filter_input(INPUT_POST, "username", 
        FILTER_SANITIZE_SPECIAL_CHARS
        );
        echo "Hello, " . $username . "!";

        // $age = filter_input(INPUT_POST, "age" ,
        // FILTER_SANITIZE_NUMBER_INT   
        // );
        // echo "Age = " . $age;
        $email = filter_input(INPUT_POST, "email" ,
        FILTER_SANITIZE_EMAIL   
        );
        echo "Email = " . $email;

        $age = filter_input(
            INPUT_POST,
            "age",
            FILTER_VALIDATE_INT);
        echo "Age now is = " . $age;
        if(empty($age)){
            echo "please fill a valid age";
        }
     }
?>