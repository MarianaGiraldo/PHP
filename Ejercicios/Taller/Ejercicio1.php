<?php
    $paginas=0;
    $link="index.php";
    for($paginas=0;$paginas<200;$paginas++){
        echo "<A href=$link >\n $paginas </A>";
        echo nl2br("\n");
    }
?>