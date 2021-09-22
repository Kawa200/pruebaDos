<?php
include("databaseconnect.php");


$numCedula=$_POST['numero_cedula'];
$primerNombre=$_POST['primer_nombre'];
$segundoNombre=$_POST['segundo_nombre'];
$apellidos=$_POST['Apellidos'];
$direccion=$_POST['Direccion'];
$telefono=$_POST['Telefono'];
$ciudad=$_POST['Ciudad'];

$consulta="INSERT INTO conductores
                (numCedula,primerNombre,segundoNombre,apellidos,direccion,telefono,ciudad) 
                VALUES('$numCedula','$primerNombre','$segundoNombre','$apellidos','$direccion','$telefono','$ciudad')";
echo $consulta;
    if(mysqli_query($conn,$consulta)){
echo " Datos insertados";
    }else{
        echo "Datos NO insertados";

    }
?>