<?php
$i=0;
    while($i<=5){
        echo nl2br("While $i  \r");
        $i++;
    }
echo nl2br("\n \r");
$i=0;
    for($i=1; $i<=3; $i++){
        echo nl2br("\n For $i");
    }
echo nl2br("\n \r");
$i=0;
    do{
        echo nl2br("\n Do-While $i");
        $i++;
    }while($i<3);
echo nl2br("\n\n Multiplicaciones \r");
$i=1;
$resultado=1;
$contador=0;
do{
    $resultado=$resultado*$i;
    $contador++;
    echo "El resultado de la interacción $contador es: \n";
    echo nl2br("$resultado \n");
    $i++;
}while($i<20)


?>
<?php
            
            while($i<=2){
              echo '<li class="work-position">';
              echo '<h5>'. $cargos[$i]['trabajo'].'</h5>';
              echo '<p>'. $cargos[$i]['descripción'].'</p>';
              echo '<strong>Achievements:</strong>';
              echo '<ul>';
              echo'<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
              echo'<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
              echo'<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
              echo'</ul>';
              echo'</li>';
              $i++;
            }
              do{
                echo '<li class="work-position">';
                echo '<h5>'. $cargos[$i]['trabajo'].'</h5>';
                echo '<p>'. $cargos[$i]['descripción'].'</p>';
                echo '<strong>Achievements:</strong>';
                echo '<ul>';
                echo'<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
                echo'<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
                echo'<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
                echo'</ul>';
                echo'</li>';
                $i=$i+1;
              }while($i<=2);
            ?>
