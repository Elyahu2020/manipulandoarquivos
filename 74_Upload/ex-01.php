<!DOCTYPE html>
<html lang="pt-br">
<?php

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $file = $_FILES["fileUpload"];

        if($file["error"]){

            throw new Exception("Error: ". $file["error"]);

        }

        $dirUploads = "uploads";

        if(!is_dir($dirUploads)){

            mkdir($dirUploads);

        }

        if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
                                  
            echo "Upload realizado com sucesso!!!";

        }else{

            throw new Exception("Error: Não foi possivel realizar o upload");

        }

    }


?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivos</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="fileUpload">
        <button type="submit">אהבת</button>
    </form>
    
</body>
</html>


<?php




?>