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
    This is a login page.
    <a href="index.php">Go to Login</a>
    <form action="index.php" method="POST">
        <input type="submit">
    </form>
    <br>
    <hr>
</body>
</html>
<?php 
    
    echo "Var da Session = " . $_SESSION["username"] . "<br>";
    echo "Var da Session = " . $_SESSION["password"] . "<br>";

     if(isset($_POST["submit"])){
        session_destroy(); 
        header("location: index.php");
    }
?>