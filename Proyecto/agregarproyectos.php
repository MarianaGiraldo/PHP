<?php
require('vendor/autoload.php');

use App\Models\proyectos;

if(!empty($_POST)){
    $proyecto = new proyectos();
    $proyecto-> nombreP = $_POST['nombreP'];
    $proyecto-> descripcionP = $_POST['descripcionP'];
    $proyecto-> mesesP = $_POST['mesesP'];
    $proyecto-> visible = boolval($_POST['visibleP']);
    $proyecto->save();
      
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UV-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">

        <title>Add Proyectos</title> 
    </head>
    <body>
        <form action="../agregarproyectos.php" method="post" class="form w-50 mx-auto p-5 bg-info mt-5">
            <h3>Registrar Proyectos</h3>
            <label for="">Nombre del Proyecto: </label>
            <input type="text" name="nombreP" class="form-control" placeholder="Ingrese el nombre del proyecto..."><br>
            <label for="">Descripción del proyecto: </label>
            <textarea type="text" name="descripcionP" class="form-control" placeholder="Ingrese la descripción del proyecto..."></textarea><br>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Meses: </label>
                <input type="text" name="mesesP" class="form-control col-sm-9 mr-1" placeholder="Ingrese el número de meses que trabajó en el proyecto..."><br>
            </div>
            <label for="">Visible: </label>
            <input type="radio" name="visibleP" class="form-check-input ml-3"><br>
            <button type="submit" name="Registrar">Registrar</button>
        </form>

    </body>
</html>