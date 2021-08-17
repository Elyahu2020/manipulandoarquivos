<?php

    $file = fopen("log.txt","w+");//w+

    fwrite($file, date("Y-m-d H:i:s"));//vai escreve a data no arquivo

    fclose($file);//fecha o arquivo

    echo "Arquivo criado com sucesso";

?>