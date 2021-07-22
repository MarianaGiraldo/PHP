<?php
    class claseBaseCliente{
        private $id;
        private $contraseñaPrincipal;
        private $saldo;
        public $nombre;
        public $condiciones;

        public function showid(){
          return $this ->id;
        }
        public function getID($numID){
          if($numID==''){
            $this ->id = "No cargó el ID";
          }
          else{
            $this ->id = $numID;}
        }
        public function showcontraseña(){
            return $this ->contraseñaPrincipal;
          }
          public function getcontraseña($contraseña){
            if($contraseña==''){
              $this ->contraseñaPrincipal = "No cargó contraseña";
            }
            else{
              $this ->contraseñaPrincipal = $contraseña;}
          }
          public function showsaldo(){
            return $this ->saldo;
          }
          public function getsaldo($saldoC){
            if($saldoC==''){
              $this ->saldo = "No cargó el saldo de la cuenta";
            }
            else{
              $this ->saldo = $saldoC;}
          }
          public function __construct($nom, $idClien, $contra, $sald, $condi){
            $this-> nombre = $nom;
            $this-> getID($idClien);
            $this-> getcontraseña($contra);
            $this-> getsaldo($sald);
            $this-> condiciones=$condi;

          }
    }

?>