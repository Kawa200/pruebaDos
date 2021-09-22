<?php
include("databaseconnect.php");


$numCedula=$_POST['numero_cedula'];
$primerNombre=$_POST['primer_nombre'];
$segundoNombre=$_POST['segundo_nombre'];
$apellidos=$_POST['Apellidos'];
$direccion=$_POST['Direccion'];
$telefono=$_POST['Telefono'];
$ciudad=$_POST['Ciudad'];

$consulta="INSERT INTO propietario
                (num_cedula,primerNombre,segundoNombre,apellidos,direccion,telefono,ciudad) 
                VALUES('$numCedula','$primerNombre','$segundoNombre','$apellidos','$direccion','$telefono','$ciudad')";
echo $consulta;
    if(mysqli_query($conn,$consulta)){
echo " Datos insertados";
    }else{
        echo "Datos NO insertados";

    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    
    </head>
    <body>
        <div class="container">
            <div class="content">
           <form method="post" action="">
           	<h2>Propietarios</h2>
			  <div class="form-group">
			    <label for="">Número de cedula</label>
			    <input type="text" class="form-control" id=""  placeholder="" name="numero_cedula">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Primer nombre</label>
			    <input type="text" class="form-control" id="" placeholder="" name="primer_nombre">
			  </div>
			  <div class="form-group">
			    <label for="">Segundo Nombre</label>
			    <input type="text" class="form-control" id="" placeholder="" name="segundo_nombre">
			  </div>
			  <div class="form-group">
			    <label for="">Apellidos</label>
			    <input type="text" class="form-control" id="" placeholder="" name="Apellidos">
			  </div>
			  <div class="form-group">
			    <label for="">Dirección</label>
			    <input type="text" class="form-control" id="" placeholder="" name="Direccion">
			  </div>
			  <div class="form-group">
			    <label for="">Teléfono</label>
			    <input type="text" class="form-control" id="" placeholder="" name="Telefono">
			  </div>
			  <div class="form-group">
			    <label for="">Ciudad</label>
			    <input type="text" class="form-control" id="" placeholder="" name="Ciudad">
			  </div>
			  <div class="form-check">
			    <input type="checkbox" class="form-check-input" id="exampleCheck1">
			    <label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
            </div>

        </div>
    </body>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</html>