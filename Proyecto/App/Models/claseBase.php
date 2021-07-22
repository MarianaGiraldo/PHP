<?php
namespace App\Models ;

    class claseBase{
          public $nombre;
          public $descripcion;
          public $visible;
          public $meses;

          // public function mostrarnombre(){
            // return $this ->nombre;
          // }
          public function getnombre($nomnombre){
            if($nomnombre==''){
              $this ->nombre = "No cargó el nombre de la información";
            }
            else{
              $this ->nombre = $nomnombre;}
          }
          // public function mostrarDescripcion(){
            // return $this ->descripcion;
          // }
          public function getDescripcion($nomDescripcion){
            if($nomDescripcion==''){
           $this ->descripcion = "No cargó la descripción";
            }
            else{
           $this ->descripcion= $nomDescripcion;
          }
          }
          public function mostrarvisible(){
            return $this ->visible;
          }
          public function getvisible($nomVisible){
            $this ->visible = $nomVisible;
          }
          public function mostrarExperiencia(){
              return $this ->experiencia;
            }
            public function getExperiencia($meses){
              $this ->meses = $meses;
            }
          public function __construct($nom, $des, $vis, $mes){
            $this-> getnombre($nom);
            $this-> getDescripcion($des);
            $this-> getvisible($vis);
            $this-> getExperiencia($mes);
          }
    
    }
?>