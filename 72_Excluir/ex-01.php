<?php

    require_once("config.php");

    $file = fopen("teste.txt", "w+");


    fclose($file);

    unlink("teste.txt");//Aqui apaga o arquivo

    echo "Arquivo removido com sucesso";

?>