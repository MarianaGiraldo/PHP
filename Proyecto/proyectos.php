<?php
require_once('vendor/autoload.php');
    use App\Models\proyectos;


$proye= proyectos::all();

 $i=0;
 function mostrarProyectos($proyectos){
  echo '<div class="project">';
  echo '<h5>'. $proyectos->nombreP.'</h5>';
  echo '<div class="row">';
  echo  '<div class="col-3">';
  echo  '<img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">';
  echo   '</div>';
  echo   '<div class="col">';
  echo         '<p>'.$proyectos->descripcionP . '</p>';
  echo         '<p>'.$proyectos->años() . '</p>';
  echo         '<strong>Technologies used:</strong>';
  echo         '<span class="badge badge-secondary">PHP</span>';
  echo         '<span class="badge badge-secondary">HTML</span>';
  echo         '<span class="badge badge-secondary">CSS</span>';
  echo '      </div>';
  echo '</div>';
  echo '</div>';
 }
?>