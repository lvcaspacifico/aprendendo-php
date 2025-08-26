<?php
    // $disk = "D:\\";
    // $free_space = disk_free_space($disk);
    // $free_space = number_format(($free_space / 1073741824), 2);
    // $disk = str_replace($disk, "\\","");
    // echo $free_space . "GB available on Disk {$disk}";

    // $conteudo = file_get_contents("test.txt");
    // echo $conteudo;

    $path = "../roadmap/games.csv";
    $arquivo = fopen($path, "r");

    $header = fgets($arquivo);
    $headers = explode(",", trim($header));
    $name = basename($path);

    echo "HEADERS OF $name:\n";
    foreach ($headers as $h) {
        echo "$h\n";
    }
    fclose($arquivo);
    $newcontent ="\nTreasure of Nadia,RPG/Dating Sim,PC,2023,10";
    file_put_contents($path, $newcontent, FILE_APPEND);
?>