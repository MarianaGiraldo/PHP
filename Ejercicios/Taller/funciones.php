<?php
$a = 1;
$b = 2;
    function suma1(){
        global $a, $b;
        $b = $a +$b;
    }
   suma1();
   echo nl2br("$b \n");

   function operacion($a, $b, $c, $d){
       $suma = $a+$b+$c+$d;
       echo $suma;
   }
operacion(1, 3, 5, 6);

?>