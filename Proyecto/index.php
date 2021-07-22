<?php
require_once('public/index.php');
include('trabajos.php');
include('proyectos.php');

$nombre= "Mariana ";
$apellido="Giraldo ";
$nombrecompleto= "$nombre$apellido";

// var_dump($cargos);
$mail= "mgiraldo594@misena.edu.co";
$phone= "312 3888316";
$linkedin= "linkedin.com/MarianaGiraldo";
$twitter= "@Mariana_Gluna";

$limite= 200;
    
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
    #resume-header {
    margin-top: 20px;
    margin-bottom: 20px;
    }
    
    #profile-picture {
        width: 100%;
    }
    #resume-footer {
        padding: 20px;
        text-align: center;}
    
    .border-bottom-gray {
        padding-bottom: 10px;
        border-bottom: solid 1px darkgray;
    }
    
    .work-position {
        margin-bottom: 40px;
    }
    
    .project {
        margin-bottom: 40px;
    }
    </style>

  <title>Resume</title>
</head>

<body>
  <div class="container">
    <div id="resume-header" class="row">
      <div class="col-3">
        <img id="profile-picture" src="https://lh3.googleusercontent.com/ItVfHmGWfx5Oh-sXei6hMgPCFrzhElKa4SVPkpOcDYAt7BCRlsfpPHQdDdS_mXIJhhOZDOwCdxcDhPofm7NwDXdWS-XbN4wpqdy6Lv3dHdP8tEffOcQeYjtvvJfn0kGCprXSDh1XxOSYjY1hveQOkUolfHF7d2V-IRgyJWkpN0_b5S5UcbgLDSBkisEeMAHzeoK76v50OvSUtoIuTecISJXLN0r60oBHH_no7IlshkKrW89OWpIb7t0MCTsGleNXXt6Z5kB7yq4T1dHIFFWqaTIo0wADI0IaNfVqzNOlgPPhCEV7zdoFnkBJYCc8mJA2tU2rrCwLw5JI_aa7polK8xecQtdffAdM7rxzFK33DH3F6_-RtsH4I-4OwvaKFwJTRj92QXOlL2XJa1RLlno9wyWWw8lyR7_A-TGBSoTOicWJoj8Zkjv_JWTEBDGNXKGhcgryjJDPZeBOQMFGkOCrgHRA1FFG2dS9hm1tcIonpI1YgRPA8mvSJzEsArSxxbqGu9FYyqV5r_aYuPVIlO6K4JU0Uke32Q_6VcUW2zPIU1BZYRFDTHuOzY1A_-7IzWNKUYi7m-iB94zwrT9WMsnDrQlLzYLYiq03w_NvHndUDKQPeZxwizRHt_YLB-o9AbXYztGOHqhHhyUMsopiMgWAyg5s0HeCvK8OMUBmLOd_Jp8m4Usd_QRRmE36DNjWqBqcD9cEKmwW45_h0vc2wcIinR73DA=w492-h657-no?authuser=0" alt="https://ui-avatars.com/api/?name=John+Doe&size=255">
      </div>
      <div class="col">
        <h1>
          <?php echo $nombrecompleto ?>
          </h1>
        <h2>PHP Developer</h2>
        <ul>
          <li>Mail: <?php echo $mail ?></li>
          <li>Phone: <?php echo $phone ?></li>
          <li>LinkedIn: <?php echo $linkedin ?></li>
          <li>Twitter: <?php echo $twitter ?></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h2 class="border-bottom-gray" >Mi perfil</h2>
        <p>
        Soy bachiller, actualmente estudiante en formación en Tecnólogo en Análisis y desarrollo de sistemas de la información y también en una certificación en Programación. 
        Habilidad en el manejo y creación de bases de datos relacionales con SQL . Tengo estudios en Computación Cuántica y el lenguaje de programación Qiskit. 
        Habilidades en el lenguaje de etiquetado HTML y CSS, manejo básico de programación en Node.js, React.js, PHP y Python. 
        Manejo de programas de diseño como Adobe Photoshop, Adobe XD y Adobe Premiere. Además cuento con un nivel intermedio - avanzado de inglés.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div>
          <h3 class="border-bottom-gray" >Experiencia Laboral</h3>
          <ul>
            <?php
            
            $i=0;
            $acumulador=0;
              echo nl2br("<h4>Trabajos en los últimos $limite meses</h4>\n");
              for($i=0;$i<count($cargos);$i++){
                $acumulador=$acumulador+$cargos[$i]->meses;
                if($acumulador>$limite){
                  break;
                }
                if($cargos[$i]->visible==true){
                trabajosExperiencia($cargos[$i]);
                }
              }
            ?>
            <a class="btn btn-primary" href="http://localhost:8888/PHP/Proyecto/agregarproyectos.php" role="button">Agregar Trabajos</a>
<br>
          </ul>
        </div>
        <div>
            <h3 class="border-bottom-gray">Proyectos</h3>
               <?php
               $i=0;
                for($i=0;$i<count($proye);$i++){
                  if($proye[$i]->visible==true){
                  mostrarProyectos($proye[$i]);
                  }
                 }
               ?>
		<a class="btn btn-primary" href="http://localhost:8888/PHP/Proyecto/agregartrabajos.php" role="button">Agregar Trabajos</a>
	<br>
            </div>
          
        </div> 
        <div class="col-3">
        <h3 class="border-bottom-gray" >Habilidades y herramientas</h3>
        <h4>Backend</h4>
        <ul>
          <li>PHP</li>
        </ul>
        <h4>Frontend</h4>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
        </ul>
        <h4>Frameworks</h4>
        <ul>
          <li>Illuminate</li>
          <li>Bootstrap</li>
        </ul>
        <h4>Diseño</h4>
        <ul>
          <li>Adobe Photoshop</li>
          <li>Adobe XD</li>
          <li>Adobe Premiere</li>
        </ul>
        <h3 class="border-bottom-gray" >Idiomas</h3>
        <ul>
          <li>Español</li>
          <li>Inglés</li>
        </ul>
      </div>
    </div>
    <div id="resume-footer" class="row">
      <div class="col">
          Designed by @MarianaGiraldo
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>
</body>

</html>