<?php
    class claseBaseAdmin{
        private $id;
        private $contraseñaPrincipal;
        private $claveDinamica;
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
          public function showclave(){
            return $this ->claveDinamica;
          }
          public function getclave($clave){
            if($clave==''){
              $this ->claveDinamica = "No cargó clave dinámica";
            }
            else{
              $this ->claveDinamica = $clave;}
          }
          public function __construct($nom, $idAdmin, $contra, $claveD, $condi){
            $this-> nombre = $nom;
            $this-> getID($idAdmin);
            $this-> getcontraseña($contra);
            $this-> getclave($claveD);
            $this-> condiciones=$condi;

          }
    }

?>