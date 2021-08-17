<?php

    $images = scandir("Imagens");

    $data   = array();

    var_dump($images);

    foreach ($images as $img){

        if(!in_array($img, array(".", ".."))){

            $filename = "imagens" . DIRECTORY_SEPARATOR . $img;
            
            $info           = pathinfo($filename);
            $info["size"]   = filesize($filename);
            $info["modify"] = date("d/m/Y H:i:s", filemtime($filename));
            $info["url"]    = "https://localhost/Hcode_PHP/S14_Arquivos/70_ler/".str_replace("\\", "/", $filename);//str_replace inverte a barra que directory_separeator criou invertida   

            array_push($data, $info);

        }

    }

    echo json_encode($data);

?>