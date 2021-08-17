<?php

    $link = "https://www.youtube.com/s/desktop/e9a67dcd/img/favicon_144x144.png";

    $content = file_get_contents($link);

    

    $parse = parse_url($link);

    $basename = basename($parse["path"]);

    $file = fopen($basename, "w+");

    fwrite($file, $content);

    fclose($file);

?>

<img src="<?=$basename?>">