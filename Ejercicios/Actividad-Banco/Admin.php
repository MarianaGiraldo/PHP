<?php
require 'App/Admin.php';

$administrador1= new administrador(' Juan Perez ','7596','Teamo123', '467835', TRUE);
$administrador2= new administrador(' Ana Muñoz','1032','Hola22', '864954', TRUE);
$administrador3= new administrador(' Sara González','4596','SaraG123', '457832', TRUE);
$administrador4= new administrador(' David Giraldo','1235','MichiyDavidforever', '179382', False);

$admins=[$administrador1, $administrador2, $administrador3, $administrador4];


function mostraradmins($admin){
    if ($admin->condiciones == TRUE){
        // echo '<li class="ml-5>';
        echo '<h5> '. $admin->nombre.'</h5>';
        echo "<p> Id:\n". $admin->showID().'</p>';
        echo '<div class="row">';
        echo '<div class="col-4">';
        echo '<p>';
        echo '  <a class="btn btn-primary" data-toggle="collapse" href="#collapseContra" role="button" aria-expanded="false" aria-controls="collapseExample">';
        echo '    Contraseña Principal';
        echo '  </a>';
        echo '</p>';
        echo '  <div class="collapse" id="collapseContra">';
        echo '      <div class="card card-body">'. $admin->showcontraseña(). '</div>';
        echo '  </div>';
        echo '</div>';
        echo '</div> ';
        echo '<div class="row">';
        echo '<div class="col-4">';
        echo '<p>';
        echo '  <a class="btn btn-primary" data-toggle="collapse" href="#collapseClave" role="button" aria-expanded="false" aria-controls="collapseExample">';
        echo '    Clave dinámica: ';
        echo '  </a>';
        echo '</p>';
        echo '  <div class="collapse" id="collapseClave">';
        echo '      <div class="card card-body">'. $admin->showclave(). '</div>';
        echo '  </div>';
        echo '</div>';
        echo '</div> ';
    }
}
?>