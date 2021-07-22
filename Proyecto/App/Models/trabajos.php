<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model ;


    
class trabajos extends Model{
    protected $table = 'trabajos';
    public function mostrarDescripcion(){
        return $this ->descripcion;
      }
    public function mostrarnombre(){
      return $this ->nombre;
    }
    public function años(){
      $output = [];
        if ($this ->meses >= 12) {
            $years    = ($this ->meses - $this ->meses % 12) / 12;
            $output[] = $years > 1 ? $years . ' años' : $years . ' año';
        }
    
        if ($this ->meses % 12 > 0) {
            $monthsRest = $this ->meses % 12;
            $output[]   = $monthsRest > 1 ? $monthsRest . ' meses' : $monthsRest . ' mes';
        }                
        echo implode(' ', $output );
        echo ' de experiencia';

    }

}
?>