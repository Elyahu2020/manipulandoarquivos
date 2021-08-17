<?php

    if(isset($_COOKIE["NOME_DO_COOKIE"])) {

        //var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"])); acessar quando é objeto

        $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);
        
        echo $obj->empresa;

    }

?>