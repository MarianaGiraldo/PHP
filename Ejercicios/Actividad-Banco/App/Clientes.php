<?php
    require_once 'clasePadreCliente.php';
    class clientes extends claseBaseCliente{
        public function __construct($nom, $idClien, $contra, $sald, $condi){
            $nombreNuevo="<strong> Nombre del Cliente: </strong>";
            $nombreNuevo= "$nombreNuevo $nom";
            parent:: __construct($nombreNuevo, $idClien, $contra, $sald, $condi);
        }
    }
?>