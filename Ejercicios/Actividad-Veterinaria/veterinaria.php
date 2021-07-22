<?php
include('pacientes.php');
   
?>

<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <style>
    *{
      margin:0;
      padding:0;
    }
    
    .veterinaria{
        width: 70%;
        padding: 20px;
        margin: 20px;
    }
    .container{
        margin: 10px;
    }
    .row{
        margin: 10px;
    }
    .titulo{
        text-align: center;
        margin: auto;
        padding: 30px 0;
        display: flex;
        align-items: center;
        font-size: 70px;
    }
    .border-bottom-gray {
    padding-bottom: 10px;
    border-bottom: solid 1px darkgray;
    }
    .badge{
      font-size:20px;
    }
    #resume-footer {
        padding: 20px;
        text-align: center;
    }
  </style>

  <title>VetMagic</title>
</head>

<body>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light mw-100 " style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <a class="navbar-brand text-primary font-weight-bold" href="#">VetMagic</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#pacientes">Pacientes</a>
          </li>
        </ul>
        </div>
      </div>
    </nav>
    <div style="background-image: url(Imagen.jpg);">
     <br><br><br><h1 class="text-primary titulo pl-4 mx-auto" style="width: 400px; background-color: #e3f2fd">VETMAGIC</h1><br><br><br><br><br><br><br><br><br><br><br>
      </div>
    </div>
    <div class="row mt-5" >
      <div class="col veterinaria ml-5">
        <div>
          <h3 class="border-bottom-gray " >Veterinaria Magic</h3>
            <p>Atención médica especializada para perros y gatos</p>
            <img src="https://www.clinicaveterinariaejea.com/wp-content/uploads/2020/03/Equipo-Clinica-Veterinaria-Ejea-1-480x300.jpeg" alt="..." class="img-thumbnail">
            <br><br><br><br>
        <div>
            <h3 class="border-bottom-gray">Clínicas</h3>
            </div>
            <div class="project">
                <h5>Clínica X</h5>
                <div class="row">
                    <div class="col-5">
                        <img id="profile-picture" src="https://www.simbiotia.com/wp-content/uploads/diseno-de-clinicas-veterinarias.jpg" alt="" class="w-100">
                      </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-primary">Especialidades</span>
                        <span class="badge badge-primary">SPA</span>
                        <span class="badge badge-primary">Más</span>
                      </div>
                </div>
            </div>
          </div>
      </div>
      <div class="col-3 ml-2 mr-5 ">
        <h3 class="border-bottom-gray" >SERVICIOS</h3>
        <h4>Hospitalización</h4>
        <ul>
          <li>Exámenes y Laboratorios</li>
        </ul>
        <h4>Cirugías</h4>
        <ul>
            <li>Lorem ipsum</li>
            <li>Lorem ipsum</li>
        </ul>
        <h4>SPA</h4>
        <ul>
          <li>Baños y limpieza</li>
          <li>Corte de pelo</li>
        </ul>
        <h3 class="border-bottom-gray" >Languages</h3>
        <ul>
          <li>Spanish</li>
          <li>English</li>
        </ul>
      </div>
    </div>
    <div class="container mx-auto pt-4" style="background-color: #e3f2fd;">
      <h3 class="border-bottom-gray mx-5 " id="pacientes" >Pacientes</h3><br/>
      <div class="row mx-5">
      <div class="col">
        <h4>Perros</h4>
          <ul>
          <?php 
            $i=0;
             for($i=0;$i<$conteo;$i++){
              pacientesPerros($pacientes[$i]);
            }
          ?>
          </ul>
      </div>
      <div class="col">
        <h4>Gatos</h4>
          <ul>
          <?php 
            $i=0;
            for($i=0;$i<$conteo;$i++){
              pacientesGatos($pacientes[$i]);
            }
          ?>
          </ul>
      </div>
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