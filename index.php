<?php
    include("database.php");

    // function generateUuidV4(): string {
    //     $data = random_bytes(16); // 16 bytes = 128 bits

    //     // Ajusta versão para 0100 (UUID v4)
    //     $data[6] = chr((ord($data[6]) & 0x0f) | 0x40);
    //     // Ajusta variante para 10xx
    //     $data[8] = chr((ord($data[8]) & 0x3f) | 0x80); 

    //     return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));;
    // }
    // $uuid =  generateUuidV4();
    // echo "<br><br>UUID será = " . $uuid;
    // echo "<br>UUID tamanho = " . strlen($uuid);

    // $username = "lvcaspacifico";
    // $password = "12345";
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // $sql = "INSERT INTO users (uuid, username, password)
    //         VALUES ('{$uuid}','{$username}','{$hashedPassword}')";

    // try {
    //     mysqli_query($conn, $sql);
    //     echo "<br> User registered!";
    // } catch (mysqli_sql_exception){
    //     echo "<br> Could not register user :(";
    // }

    $sql = "SELECT * FROM users WHERE uuid = '6eddd1cd-89f3-4334-b02f-b2f5727b4bc1'";
    $user = mysqli_query($conn, $sql);

    if(mysqli_num_rows($user) > 0){
        while($row = mysqli_fetch_assoc($user)){
            echo "<br>" . $row["uuid"];
            echo "<br>" . $row["username"];
            echo "<br>" . $row["password"];
            echo "<br>" . password_verify("12345", $row["password"]);
        }
    } else {
        echo "No user found.";
    }

    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL 🐬 + PHP 🐘</title>
</head>
<body>
    
</body>
</html>