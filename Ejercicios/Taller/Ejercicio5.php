<?php
$i=0;
$acumulado=0;
$n=0;
echo nl2br("<b>Loop For</b>\n");
for($i=10;$i<=50;$i++){
    $acumulado=$acumulado+$i;
    $n++;
    echo "El suma en la interacción\n $n \n es:$acumulado <br>";
}
$i=10;
$acumulado=0;
$n=0;
echo nl2br("\n\n<b>Loop While</b>\n");
while($i<=50){
    $acumulado=$acumulado+$i;
    $n++;
    echo "El suma en la interacción\n $n \n es:$acumulado <br>";
    $i++;
}
$i=10;
$acumulado=0;
$n=0;
echo nl2br("\n\n<b>Loop Do-While</b>\n");
do{
    $acumulado=$acumulado+$i;
    $n++;
    echo "El suma en la interacción\n $n \n es:$acumulado <br>";
    $i++;
}while($i<=50)
?>