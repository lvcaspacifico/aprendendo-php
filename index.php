<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 🐘</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username"><br>
        <label for="password">Password:</label>
        <input type="text" name="password"><br><br>
        <input type="submit" name="submit">
    </form>
    <hr>
    <br>
    <a href="home.php">Ir para home ➡️</a>
    <br>
    <hr> 
</body>
</html>
<?php  
    if(isset($_POST["submit"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            echo "Setando as vars<br>";
            $_SESSION["username"] = $_POST["username"] . "skibidi";
            $_SESSION["password"] = $_POST["password"] . "skibidi";

            header("location: home.php");
        } else {
            echo "Não foi possível setar vars de \$_SESSION<br>";
        }
    }
?>