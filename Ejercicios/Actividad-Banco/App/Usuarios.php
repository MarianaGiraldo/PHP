<?php
    require_once 'clasePadreusuario.php';
    class usuarios extends claseBaseusuario{
        public function __construct($nom, $idUsu, $mailUsu, $fechaU, $condi){
            $nombreNuevo="<strong> Nombre del usuario: </strong>";
            $nombreNuevo= "$nombreNuevo $nom";
            parent:: __construct($nombreNuevo, $idUsu, $mailUsu, $fechaU, $condi);
        }
    }
?>