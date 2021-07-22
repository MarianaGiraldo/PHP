<?php
require('vendor/autoload.php');

use App\Models\trabajos;

if(!empty($_POST)){
    $trabajo = new trabajos();
    $trabajo-> nombreT = $_POST['nombreT'];
    $trabajo-> descripciont = $_POST['descripcionT'];
    $trabajo-> meses = $_POST['mesesT'];
    $trabajo-> visible = boolval($_POST['visibleT']);
    $trabajo->save();
      
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

        <title>Add Trabajos</title> 
    </head>
    <body>
        <form action="../agregartrabajos.php" method="post" class="form w-50 mx-auto p-5 bg-warning mt-5">
            <h3>Registrar Trabajos</h3>
            <label for="">Nombre del trabajo: </label>
            <input type="text" name="nombreT" class="form-control" placeholder="Ingrese el nombre del trabajo..."><br>
            <label for="">Descripción del trabajo: </label>
            <textarea type="text" name="descripcionT" class="form-control" placeholder="Ingrese la descripción del trabajo..."></textarea><br>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Meses: </label>
                <input type="text" name="mesesT" class="form-control col-sm-9 mr-1" placeholder="Ingrese el número de meses que trabajó..."><br>
            </div>
            <label for="">Visible: </label>
            <input type="radio" name="visibleT" class="form-check-input ml-3"><br>
            <button type="submit" name="Registrar">Registrar</button>
        </form>

    </body>
</html>