<?php

    $password = "pizza123";
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


    if(password_verify("pizza123", $hashedPassword)){
        echo "Deu boa, pode logar";
    }

?>