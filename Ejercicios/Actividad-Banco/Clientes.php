<?php
require 'App/clientes.php';

$cliente1= new clientes(' Luis Perez ','7596','Teamo123', '$250.000', TRUE);
$cliente2= new clientes(' Gabriela Muñoz','1032','Hola22', '$1.000.540', TRUE);
$cliente3= new clientes(' Samuel González','4596','SaraG123', '$50.000', false);
$cliente4= new clientes(' David Giraldo','1235','MichiyDavidforever', '$12.595.000', True);

$clientes=[$cliente1, $cliente2, $cliente3, $cliente4];


function mostrarclientes($cliente){
    if ($cliente->condiciones == TRUE){
        // echo '<li class="ml-5>';
        echo '<h5> '. $cliente->nombre.'</h5>';
        echo "<p> Id:\n". $cliente->showID().'</p>';
        echo '<div class="row">';
        echo '<div class="col-4">';
        echo '<p>';
        echo '  <a class="btn btn-primary" data-toggle="collapse" href="#collapseContra" role="button" aria-expanded="false" aria-controls="collapseExample">';
        echo '    Contraseña Principal';
        echo '  </a>';
        echo '</p>';
        echo '  <div class="collapse" id="collapseContra">';
        echo '      <div class="card card-body">'. $cliente->showcontraseña(). '</div>';
        echo '  </div>';
        echo '</div>';
        echo '</div> ';
        echo '<div class="row">';
        echo '<div class="col-4">';
        echo '<p>';
        echo '  <a class="btn btn-primary" data-toggle="collapse" href="#collapseClave" role="button" aria-expanded="false" aria-controls="collapseExample">';
        echo '    Saldo en la cuenta: ';
        echo '  </a>';
        echo '</p>';
        echo '  <div class="collapse" id="collapseClave">';
        echo '      <div class="card card-body">'. $cliente->showsaldo(). '</div>';
        echo '  </div>';
        echo '</div>';
        echo '</div> ';
    }
}
?>