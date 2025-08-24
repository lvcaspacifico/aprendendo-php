<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "elephpant";
    $conn = "";

    try{
        $conn = mysqli_connect(
        $db_server,
        $db_user,
        $db_pass,
        $db_name
        );
    } catch(mysqli_sql_exception){
        echo "MySQL error: could form msqli_connect";
    }

    if($conn){
        echo "<i>~ ~ you are connected :)</i>";
    }
?>