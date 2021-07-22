<?php
    class claseBaseUsuario{
        private $id;
        private $mail;
        private $fecha;
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
        public function showmail(){
            return $this ->mail;
          }
          public function getmail($mailU){
            if($mailU==''){
              $this ->mail = "No cargó cantraseña";
            }
            else{
              $this ->mail = $mailU;}
          }
          public function showfecha(){
            return $this ->fecha;
          }
          public function getfecha($fechaU){
            if($fechaU==''){
              $this ->fecha = "No cargó el fecha de la cuenta";
            }
            else{
              $this ->fecha = $fechaU;}
          }
          public function __construct($nom, $idUsu, $mailUsu, $fechaU, $condi){
            $this-> nombre = $nom;
            $this-> getID($idUsu);
            $this-> getmail($mailUsu);
            $this-> getfecha($fechaU);
            $this-> condiciones=$condi;

          }
    }

?>