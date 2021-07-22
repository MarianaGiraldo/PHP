<?php
    class pacientes{
        private $nombre;
        private $id_animal;
        public $propietario;
        private $tipo_animal;
        private $causa_consulta;
        public $fecha_consulta;
        public $fecha_nacimiento;

        public function mostrarNombre(){
            return $this ->nombre;
          }
          public function getNombre($nomAnimal){
            if($nomAnimal==''){
              $this ->nombre = "No cargó el nombre del animal";
            }
            else{
              $this ->nombre = strtoupper($nomAnimal);}
          }
          public function mostrarTipo(){
            return $this ->tipo_animal;
          }
          public function getTipo($tipoAnimal){
            if($tipoAnimal==''){
              $this ->tipo_animal = "No cargó el nombre del trabajo";
            }
            else{
              $this ->tipo_animal = strtoupper($tipoAnimal);}
          }
        public function mostrarID(){
            return $this ->id_animal;
          }
        public function getID($id){
            if($id==''){
              $this ->id_animal = "No cargó el nombre del trabajo";
            }
            else{
              $this ->id_animal = $id;}
          }
        public function mostrarCausa(){
            return $this ->causa_consulta;
          }
        public function getCausa($causa){
            if($causa==''){
              $this ->causa_consulta = "No cargó el nombre del trabajo";
            }
            else{
              $this ->causa_consulta= $causa;}
          }
        
        public function calculaedad($fechaconsulta, $fechanacimiento){
            $fechaN = explode("-", $fechanacimiento);
            $fechaC = explode("-", $fechaconsulta);
            $ano_diferencia  = intVal($fechaC[0]) - intVal($fechaN[0]);
            $mes_diferencia = intVal($fechaC[1]) - intVal($fechaN[1]);
            $dia_diferencia   =  intVal($fechaC[2]) - intVal($fechaN[2]);
            if ($dia_diferencia < 0 || $mes_diferencia < 0){
                 $ano_diferencia--;}
            echo ("Edad:\n". abs($ano_diferencia). ' años ');
            echo (abs($mes_diferencia). ' meses');

          }
          public function __construct($nom, $idanimal, $prop, $tipo, $cause, $fechacon, $fechanac){
            $this-> getNombre($nom);
            $this-> getID($idanimal);
            $this-> propietario= $prop;
            $this-> getTipo($tipo);
            $this-> getCausa($cause);
            $this-> fecha_consulta=$fechacon;
            $this-> fecha_nacimiento=$fechanac;
          }
    }
    $paciente1 = new pacientes("Nina", "1032", "Mariana Giraldo", "perro", "infección", "2021-03-20", "2019-09-07" );
    $paciente2 = new pacientes("Thor", "1050", "Lucas Gonzáles", "gato", "Diarrea", "2021-04-01", "2018-01-25" );
    $paciente3 = new pacientes("Linda", "5220", "Victoria Rodríguez", "perro", "Corte de pelo", "2021-04-20", "2017-02-18" );
    $paciente4 = new pacientes("Copito", "3268", "Gabriela Suarez", "perro", "Vómito", "2021-03-01", "2020-01-30" );
    $paciente5 = new pacientes("Michi", "7724", "Yoselin Luna", "gato", "Diarrea", "2020-12-01", "2018-11-10" );

    $pacientes = [$paciente1, $paciente2, $paciente3, $paciente4, $paciente5];
    $conteo= count($pacientes);
    function pacientesPerros($animal){
        if ($animal->mostrarTipo() == "PERRO"){
            echo '<li>';
            echo '<h5> Nombre: '. $animal->mostrarNombre().'</h5>';
            echo "<p> Id:\n". $animal->mostrarID().'</p>';
            echo "<p> Propietario:\n". $animal->propietario.'</p>';
            echo "<p> Causa de consulta:\n". $animal->mostrarCausa().'</p>';
            echo "<p>". $animal->calculaedad($animal->fecha_consulta, $animal->fecha_nacimiento).'</p>';
        }
    }
    function pacientesGatos($animal){
        if ($animal->mostrarTipo() == "GATO"){
            echo '<li>';
            echo '<h5> Nombre: '. $animal->mostrarNombre().'</h5>';
            echo "<p> Id:\n". $animal->mostrarID().'</p>';
            echo "<p> Propietario:\n". $animal->propietario.'</p>';
            echo "<p> Causa de consulta:\n". $animal->mostrarCausa().'</p>';
            echo "<p> Edad:\n". $animal->calculaedad($animal->fecha_consulta, $animal->fecha_nacimiento).' </p>';
        }
    }
?>