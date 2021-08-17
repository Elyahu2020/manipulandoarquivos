<?php

    $file = fopen("log.txt","a+");//a+

    fwrite($file, date("Y-m-d H:i:s")."\r\n");//vai escreve a data no arquivo "\r\n" pula linha e volta o cursor
    
    fclose($file);//fecha o arquivo

    echo "Arquivo criado com sucesso";

?>