<?php
require 'App/Usuarios.php';

$usuario1= new usuarios(' Juan Gomez ','7596','juangomez@gmail.com', '30-10-2020',TRUE);
$usuario2= new usuarios(' Ana Bernal','1032','anabernal@gmail.com', '24-04-2018', false);
$usuario3= new usuarios(' Sara Rodríguez','4596','sararodriguez1@hotmail.com', '08-03-2021', TRUE);
$usuario4= new usuarios(' David Lopez','1235','dajulopez@outlook.com', '18-07-2019',TRUE);

$usuarios=[$usuario1, $usuario2, $usuario3, $usuario4];


function mostrarusuarios($usuario){
    if ($usuario->condiciones == TRUE){
        // echo '<li class="ml-5>';
        echo '<h5> '. $usuario->nombre.'</h5>';
        echo "<p> Id:\n". $usuario->showID().'</p>';
        echo "<p> mail:\n". $usuario->showmail().'</p>';
        echo "<p> Fecha de ingreso:\n". $usuario->showfecha().'</p>';
    }
}
?>