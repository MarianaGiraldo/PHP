<?php
$i=0;
echo nl2br("<b>Loop For</b>\n");
for($i=1;$i<=300;$i++){
    echo "$i \n";
    if ($i % 3 == 0){
        echo nl2br("es múltiplo de 3 \n");
    }
    else{
        echo nl2br(" no es múltiplo de 3 \n");
    }
}

$i=1;
echo nl2br("\n\n<b>Loop While</b>\n");
while($i<=300){
    echo "$i \n";
    if ($i % 3 == 0){
        echo nl2br("es múltiplo de 3 \n");
    }
    else{
        echo nl2br(" no es múltiplo de 3 \n");
    }
    $i++;
}
$i=1;
echo nl2br("\n\n<b>Loop Do-While</b>\n");
do{
    echo "$i \n";
    if ($i % 3 == 0){
        echo nl2br("es múltiplo de 3 \n");
    }
    else{
        echo nl2br(" no es múltiplo de 3 \n");
    }
    $i++;
}while($i<=300);
?>