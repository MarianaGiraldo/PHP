<?php
$i=0;
echo nl2br("<b>Loop For</b>\n");
for($i=400;$i>=200;$i=$i-3){
    echo"$i \n\n";
}
$i=400;
echo nl2br("\n\n<b>Loop While</b>\n");
while($i>=200){
    echo"$i \n\n";
    $i=$i-3;
}
$i=400;
echo nl2br("\n\n<b>Loop Do-While</b>\n");
do{
    echo"$i \n\n";
    $i=$i-3;
}while($i>=200)
?>