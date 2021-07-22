<?php
require_once('vendor/autoload.php');
    use App\Models\trabajos;

    $cargos= trabajos::all();

      $i=0;
      function trabajosExperiencia($trabajos){
          echo '<li class="work-position">';
          echo '<h5>'. $trabajos->nombreT.'</h5>';
          echo '<p>'. $trabajos->descripcionT.'</p>';
          echo '<p>'. $trabajos->años().' </p>';
          echo '<strong>Achievements:</strong>';
          echo '<ul>';
          echo'<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
          echo'<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
          echo'<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
          echo'</ul>';
          echo'</li>';
        
      }
?>