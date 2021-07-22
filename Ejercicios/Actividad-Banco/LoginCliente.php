<?php
include('Clientes.php');
   
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
     <br><br><br><div class="text-primary p-5 mx-auto" style="width: 400px; background-color: #e3f2fd">
     <form>
     <h1> Clientes</h1>
     <div class="form-group">
       <label for="InputNombre">Nombre</label>
       <input type="text" class="form-control" id="InputNombre" aria-describedby="NombreHelp" placeholder="Ingresa tu Nombre Completo">
      </div>
       <div class="form-group">
         <label for="InputID">ID</label>
         <input type="text" class="form-control" id="InputID" aria-describedby="IDHelp" placeholder="Enter ID">
         <small id="IDHelp" class="form-text text-muted">No compartiremos tu ID con nadie.</small>
       </div>
       <div class="form-group">
         <label for="InputPassword1">Contraseña Principal</label>
         <input type="password" class="form-control" id="InputPassword1" placeholder="Ingresa tu contraseña">
       </div>
       <div class="form-check">
         <input type="checkbox" class="form-check-input" id="exampleCheck1">
         <label class="form-check-label" for="exampleCheck1">Acepto los términos de privacidad</label>
       </div>
       <button type="submit" class="btn btn-primary">Enviar</button>
       </form>
      </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
       </div>
        <br><br><br>
      <div class="w-75 m-auto p-5" style="background-color: #e3f7fd;">
         <h3 class="border-bottom-gray  ml-2">Clientes</h3>
            <?php
            $i=0;
             for($i=0;$i<count($clientes);$i++){
               mostrarclientes($clientes[$i]);

              }
            ?>
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