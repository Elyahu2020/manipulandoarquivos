<?php

                                                //FGETS le linha por linha do seu arquivo FREAD le quantos bites vc especificar*/

    $filename = "usuarios.csv";

    if(file_exists($filename)){

        $file = fopen($filename, "r");

        $headers = explode(",", fgets($file));  //tudo que o manipulador $file ter aqui vai ser criado um array com separação pela virgula

        $data = array();

        while ($row = fgets($file)) {           //$row vai receber fgets = "linhas" cada linha um array com suas posições divididos por virgula do $file
            
            $rowData    = explode(",", $row);   //fazer array explode na virgula
            $linha      = array();

            for($i=0; $i < count($headers); $i++){

                $linha[$headers[$i]] = $rowData[$i];
            }

            array_push($data, $linha);

        }

        fclose($file);

        echo json_encode($data);

    }


?>