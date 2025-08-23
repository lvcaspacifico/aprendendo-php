<?php

    setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
    setcookie("fav_desert", "iceream cílios", time() + (86400 * 2), "/");

    foreach($_COOKIE as $key => $value){
        echo "Key = ".$key." | Value = ".$value."<br>";
    }
?>