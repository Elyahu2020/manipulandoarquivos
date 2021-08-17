<?php

  if(!is_dir("images")){    // aqui pra nao ficar tentando criar a pasta e se ele existir dar erro 
    mkdir("images");        //Cria pasta images.
  }  

  foreach(scandir("images") as $item){

    if(!in_array($item, array(".", ".."))){
        unlink("images/" . $item);
    }

  }

  echo "Imagens apagadas com sucesso";


?>