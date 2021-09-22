
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
           <form method="post" action="insert_vehiculo.php">
           	<h2>Vehiculo</h2>

           	  <div class="form-group">
			    <label for="">Placa</label>
			    <input type="text" class="" id=""  placeholder="" name="numPlaca">
			  </div>
           	 <div class="form-group">
			    <label for="">Marca</label>
			    <input type="text" class="" id="" placeholder="" name="Marca">
			  </div> 
			  <div class="form-group">
			    <label for="">Color</label>
			    <input type="text" class="" id="" placeholder="" name="Color">
			  </div>
			  <div class="form-group">
			    <label for="">Tipo de Vehiculo</label>
			    <input type="text" class="" id="" placeholder="" name="TipoDeVehiculo">
			  </div>
			  <div class="form-group">
			    <label for="">Conductor</label>
			    <input type="text" class="" id="" placeholder="" name="Conductor">
			  </div>
			  <div class="form-group">
			    <label for="">Propietario</label>
			    <input type="text" class="" id="" placeholder="" name="Propietario">
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