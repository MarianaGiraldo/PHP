<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model ;

  class proyectos extends Model{
    protected $table = 'proyectos';
      public function mostrarDescripcion(){
        return $this ->descripcion;
      }
      public function mostrarnombre(){
          return $this ->nombre;
        }
      // public function __construct($nom, $des, $vis, $mes){
          // $descripcionNueva="<strong> Descripción del $nom: </strong><br>";
          // $descripcionNueva= "$descripcionNueva $des";
          // parent:: __construct($nom, $descripcionNueva, $vis, $mes);
      // }
      public function años(){
        $output = [];
          if ($this ->mesesP >= 12) {
              $years    = ($this ->mesesP - $this ->mesesP % 12) / 12;
              $output[] = $years > 1 ? $years . ' años' : $years . ' año';
          }
      
          if ($this ->mesesP % 12 > 0) {
              $monthsRest = $this ->mesesP % 12;
              $output[]   = $monthsRest > 1 ? $monthsRest . ' meses' : $monthsRest . ' mes';
          }                
          echo implode(' ', $output );
          echo ' de experiencia';
      }

    }
?>