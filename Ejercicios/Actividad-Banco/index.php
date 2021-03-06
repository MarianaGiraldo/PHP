<?php
// include('pacientes.php');
   
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
    
    .Banco{
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

  <title>Banco Luna</title>
</head>

<body>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light mw-100 " style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <a class="navbar-brand text-primary font-weight-bold" href="#">Banco Luna</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <div class="dropdown">
            <li class="nav-item mt-2 dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Login
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button"><a class="nav-link active" onclick="location.href='LoginAdmin.php'">Administradores</a></button>
              <button class="dropdown-item" type="button"><a class="nav-link active" onclick="location.href='LoginCliente.php'">Clientes</a></button>
              <button class="dropdown-item" type="button"><a class="nav-link active" onclick="location.href='LoginUsuario.php'">Usuarios</a></button>
            </li>
</div>
        </ul>
        </div>
      </div>
    </nav>
    <div style="background-image: url(https://assets.website-files.com/5f4f67c5950db17954dd4f52/5f5b7704da8b97990b5107fa_tipos-de-banco.jpeg);">
     <br><br><br><h1 class="text-primary titulo pl-4 mx-auto" style="width: 400px; background-color: #e3f2fd">Banco Luna</h1><br><br><br><br><br><br><br><br><br><br><br>
      </div>
    </div>
    <div class="row mt-5" >
      <div class="col Banco ml-5">
        <div>
          <h3 class="border-bottom-gray " >Banco Luna</h3>
            <p>Entidad Bancaria especializada en ahorros y cr??ditos inmobiliarios</p>
            <img src="https://assets.website-files.com/5f4f67c5950db17954dd4f52/5f5b7704da8b97990b5107fa_tipos-de-banco.jpeg" alt="..." class="img-thumbnail">
            <br><br><br><br>
        <div>
            <h3 class="border-bottom-gray">Sedes</h3>
            </div>
            <div class="project">
                <h5>Sede Bogot?? Norte</h5>
                <div class="row">
                    <div class="col-5">
                        <img id="profile-picture" src="https://i.pinimg.com/originals/2c/89/1f/2c891fa8f6e332db44fa7e521d7a3569.jpg" alt="" class="w-100">
                      </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-primary">Cr??ditos</span>
                        <span class="badge badge-primary">Ahorros</span>
                        <span class="badge badge-primary">Inversiones</span>
                      </div>
                </div>
            </div>
          </div>
      </div>
      <div class="col-3 ml-2 mr-5 ">
        <h3 class="border-bottom-gray" >SERVICIOS</h3>
        <h4>Cr??ditos</h4>
        <ul>
          <li>Inmobiliarios</li>
        </ul>
        <h4>Ahorros</h4>
        <ul>
            <li>Cuentas de ahorro</li>
            <li>Cuenta corriente</li>
        </ul>
        <h4>Inversiones</h4>
        <ul>
          <li>Bolsa de valores</li>
          <li>Acciones</li>
        </ul>
        <h3 class="border-bottom-gray" >Languages</h3>
        <ul>
          <li>Spanish</li>
          <li>English</li>
        </ul>
      </div>
    </div>
    <!-- <div class="container mx-auto pt-4" style="background-color: #e3f2fd;"> -->
      <!-- <h3 class="border-bottom-gray mx-5 " id="pacientes" >Pacientes</h3><br/> -->
      <!-- <div class="row mx-5"> -->
      <!-- <div class="col"> -->
        <!-- <h4>Perros</h4> -->
          <!-- <ul> -->
           <?php  
            // $i=0;
            //  for($i=0;$i<$conteo;$i++){
            //   pacientesPerros($pacientes[$i]);
            // }
         ?>
          <!-- </ul> -->
      <!-- </div> -->
      <!-- <div class="col"> -->
        <!-- <h4>Gatos</h4> -->
          <!-- <ul> -->
           <?php  
            // $i=0;
            // for($i=0;$i<$conteo;$i++){
            //   pacientesGatos($pacientes[$i]);
            // }
        //   ?>
          <!-- </ul> -->
      <!-- </div> -->
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