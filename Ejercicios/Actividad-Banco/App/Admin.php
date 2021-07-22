<?php
    require_once 'clasePadreAdmin.php';
    class administrador extends claseBaseAdmin{
        public function __construct($nom, $idAdmin, $contra, $claveD, $condi){
            $nombreNuevo="<strong> Nombre del Administrador: </strong>";
            $nombreNuevo= "$nombreNuevo $nom";
            parent:: __construct($nombreNuevo, $idAdmin, $contra, $claveD, $condi);
        }
    }
?>